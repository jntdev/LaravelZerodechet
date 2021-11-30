<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationDelete extends Mailable
{
    use Queueable, SerializesModels;

    public $data_user=[];
    public $data_event=[];
    public $data_slots=[];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $event, $slots)
    {
        $this->data_user=$user;
        $this->data_event=$event;
        $this->data_slots=$slots;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Vous avez un désistement')
            ->view('emails.registration_delete');
    }
}
