<?php

namespace App\Http\Livewire\Admin;

use App\Http\Resources\MemberCollection;
use Livewire\Component;
use App\Models\Member;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class BoardMembers extends Component
{
    use WithFileUploads;
    public $member;
    public $fname;
    public $lname;
    public $position;
    public $photo;
    public $email;
    public $url;
    public $m_id;
    public $edit = false;

    protected $rules = [
        'fname' => 'required|min:3|max:50',
        'lname' => 'required|min:3|max:50',
        'email' => 'required|email',
        'position' => 'required|min:3|max:40',
        'photo' => 'required|image|mimes:jpg,jpeg,png|max:3072'
    ];

    public function saveMember()
    {
        if (!$this->edit) {
            $this->validate();

            $url = $this->photo->store('members', 'public');
            $this->url = $url;

            Member::create([
                'names' => $this->fname . " " . $this->lname,
                'email' => $this->email,
                'position' => $this->position,
                'photo' => $url
            ]);

            session()->flash('message', 'Member saved Successfully');

            $this->resetInputs();
        } else {
            if ($this->member) {

                $member = $this->member;
                $this->validate([
                    'fname' => 'required|min:3|max:50',
                    'lname' => 'required|min:3|max:50',
                    'email' => 'required|email',
                    'position' => 'required|min:3|max:40',
                ]);

                $member->update([
                    'names' => $this->fname . " " . $this->lname,
                    'email' => $this->email,
                    'position' => $this->position,
                ]);

                session()->flash('message', 'Member updated successfully');
                $this->resetInputs();
                $this->edit = false;
            }
        }
    }

    public function loadMemberInfoToForm(Member $member)
    {
        // dd($member);

        $this->edit = true;
        $this->member = $member;

        $this->m_id = $member->id;
        $names = explode(" ", $member->names);
        $this->fname = $names[0];
        $this->lname = $names[1];
        $this->email = $member->email;
        $this->position = $member->position;
        $this->photo = $member->photo;
    }

    public function deleteMember(Member $member)
    {
        $member->delete();
        session()->flash('delete', 'Member Deleted Successfuly');
    }

    public function updateMemberInfo(Member $member)
    {
        dd($member);
    }

    public function resetInputs()
    {
        $this->fname = '';
        $this->lname = '';
        $this->email = '';
        $this->position = '';
        $this->photo = '';
    }



    public function render()
    {
        return view('livewire.admin.board-members', [
            'members' => new MemberCollection(Member::all())
        ])->layout('layouts.admin');
    }
}
