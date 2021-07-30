<?php

namespace App\Http\Livewire;

use App\Mail\contactMail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Component
{

    public $name;
    public $sender;
    public $phone;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'sender' => 'required|email',
        'subject' => 'required|min:5',
        'phone' => 'required|min:8',
        'message' => 'required|min:5'
    ];

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:3',
            'sender' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:5'
        ]);
    }

    public function sendMail()
    {
        $data = $this->validate();

        // Mail::send('mails.contact', $data, function($message){
        //     $message->to('bmurenzi25@gmail.com','Bienvenu MURENZI')
        //             ->subject($this->subject);
        //     $message->from($this->sender, $this->name);
        // });

        Mail::to('inf@rhf.rw')->send(new contactMail($data));

        session()->flash('message','Thank you for contacting us!');

        $this->resetInputs();
        
    }

    public function resetInputs()
    {
        $this->name = '';
        $this->sender = '';
        $this->subject = '';
        $this->phone = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
