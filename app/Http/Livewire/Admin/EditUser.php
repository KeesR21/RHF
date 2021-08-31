<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EditUser extends Component
{
    public $user;

    public $name;
    public $password;
    public $password_confirmation;
    public $current_password;
    public $email;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'password' => ['required', 'confirmed']
    ];

    public function mount($id)
    {
        $data = User::findOrFail($id);
        $this->user = $data;
        $this->name = $data->name;
        $this->email = $data->email;
        $this->password = '';
    }

    public function updateUser()
    {
        $this->validate();

        if (Hash::check($this->current_password, $this->user->password)) {
            $this->user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'name' => $this->name,
            ]);

            session()->flash('message', 'User Information Updated');
            $this->resetInputs();
        } else {
            session()->flash('error', 'Incorrect Password');
        }
    }

    function resetInputs()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
    }
    public function render()
    {
        return view('livewire.admin.edit-user')->layout('layouts.admin');
    }
}
