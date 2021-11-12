<?php

namespace App\User;
use Illuminate\Support\Facades\Auth;

class Checker
{
    /**
     * @return bool
     */
    public function isAdmin()
    {
        return Auth::user()->role == 1;
    }

    /**
     * @return bool
     */
    public function isAnim()
    {
        return Auth::user()->role == 2;
    }

    /**
     * @return bool
     */
    public function isCaptn()
    {
        return Auth::user()->role == 3;
    }

    /**
     * @return bool
     */
    public function isUser()
    {
        return Auth::user()->role == 4;
    }

    /**
     * @param $event_user_id
     * @return bool
     */
    public function eventBelongsToCurrentUser($event_user_id)
    {
        return Auth::user()->id == $event_user_id;
    }

    /**
     * @param $event_user_id
     * @return bool
     */
    public function canDeleteEvent($event_user_id)
    {
        return Auth::user()->id == $event_user_id;
    }
}
