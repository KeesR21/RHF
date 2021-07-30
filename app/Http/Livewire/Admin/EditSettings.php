<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;

class EditSettings extends Component
{

    public $name;
    public $value;
    public $editMode = false;
    public $setting;

    protected $rules = [
        'value' => 'required'
    ];

    public function loadSettingInfoToForm(Setting $setting)
    {
        $this->name = $setting->name;
        $this->value = $setting->value;
        $this->setting = $setting;
        $this->editMode = true;
    }

    public function editSetting()
    {
        $this->validate();
        $this->setting->update([
            'value' => $this->value
        ]);

        session()->flash('message','Information updated successfully');

        $this->editMode = false;
    }

    public function render()
    {
        return view('livewire.admin.edit-settings',['settings' => Setting::all()])->layout('layouts.admin');
    }
}
