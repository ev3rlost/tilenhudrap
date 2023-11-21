<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact as MailContact;

#[Layout('layouts.app')]
#[Title('Home')]
class Contact extends Component
{
    public $name, $email, $recipient = 'press@tilenhudrap.com', $subject, $message;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
    ];

    public function sendMessage(Request $request)
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
            'ip' => $request->ip()
        ];

        Mail::to($this->recipient)->send(new MailContact($data));

        $this->reset(['name', 'email', 'recipient', 'subject', 'message']);

        session()->flash('success');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
