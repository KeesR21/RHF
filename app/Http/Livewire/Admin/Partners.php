<?php

namespace App\Http\Livewire\Admin;

use App\Http\Resources\PartnersCollection;
use App\Models\Partner;
use Livewire\Component;
use Livewire\WithFileUploads;

class Partners extends Component
{

    use WithFileUploads;

    public Partner $partner;
    public $name;
    public $logo;
    public $link;
    public $edit = false;

    protected $rules = [
        'name' => 'required',
        'logo' => 'required|image|mimes:jpeg,jpg,svg,png|max:3072',
        'link' => 'required'
    ];

    public function savePartner()
    {
        if (!$this->edit) {
            $this->validate();
            $url = $this->logo->store('partners', 'public');

            Partner::create([
                'name' => $this->name,
                'logo' => $url,
                'link' => $this->link,
            ]);

            session()->flash('message', 'Partner saved successfully');

            $this->resetInputs();
        } else {
            $this->validate([
                'name' => 'required',
                'link' => 'required'
            ]);
            $this->partner->update([
                'name' => $this->name,
                'link' => $this->link,
            ]);

            session()->flash('message','Partner Updated Successfully');
            $this->resetInputs();
        }
    }

    public function loadPartnerInfoToForm(Partner $partner)
    {
        $this->edit = true;
        $this->partner = $partner;
        $this->name = $partner->name;
        $this->link = $partner->link;
        $this->logo = $partner->logo;
    }

    public function deletePartner(Partner $partner)
    {
        $partner->delete();
        session()->flash('delete', 'Partner deleted successfully');
    }

    public function resetInputs()
    {
        $this->name = '';
        $this->logo = '';
        $this->link = '';
    }

    public function render()
    {
        return view('livewire.admin.partners', ['partners' => new PartnersCollection(Partner::all())])->layout('layouts.admin');
    }
}
