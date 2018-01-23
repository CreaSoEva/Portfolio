<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact= $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $c = $this->contact;
        return $this->view('mails.mailcontact', compact('c'));
    }
}
