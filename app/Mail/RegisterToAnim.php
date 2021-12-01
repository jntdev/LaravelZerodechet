<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterToAnim extends Mailable
{
    use Queueable, SerializesModels;

    public $data_user=[];
    public $data_event=[];
    public $data_nb_registration=[];
    public $data_nb_user_to_add=[];


    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($user,$event,$nbPlayers,$nbPlayersToAdd)
    {
        $this->data_user=$user;
        $this->data_event=$event;
        $this->data_nb_registration=$nbPlayers;
        $this->data_nb_user_to_add=$nbPlayersToAdd;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Vous avez une nouvelle inscription !')
            ->view('emails.register_to_anim');
    }

    public static function startSection($section, $content = '')
    {
        \Illuminate\View\Factory::startSection($section, $content);
    }
}
