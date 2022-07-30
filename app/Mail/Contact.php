<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $subject, $msg, $datetime, $ip;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->subject = $data['subject'];
        $this->msg = $data['message'];
        $this->datetime = date('d.m.Y, H:i');
        $this->ip = $data['ip'];
    }

    public function build()
    {
        return $this->from($this->email)->view('emails.contact');
    }
}
