<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventModified extends Mailable
{
    use Queueable, SerializesModels;

    public $event_data=[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->event_data = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('L\'animation à laquelle vous êtes inscrit à été modifiée')
            ->view('emails.event_modified');
    }
}
