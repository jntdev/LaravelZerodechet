<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailToAll extends Mailable
{
    use Queueable, SerializesModels;
    public $event_data=[];
    public $mailTitle_data=[];
    public $mailContent_data=[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event,$mailTitle, $mailContent)
    {
        $this->event_data = $event;
        $this->mailTitle_data = $mailTitle;
        $this->mailContent_data = $mailContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Message de votre animateur')
            ->view('emails.mail_to_all');
    }
}
