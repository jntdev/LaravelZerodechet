<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Event;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterToUser extends Mailable
{
    use Queueable, SerializesModels;

    public $event_data=[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Event $event)
    {
        $this->event_data = $event;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Votre inscription est confirmée !')
            ->view('emails.register_to_user');
    }
}
