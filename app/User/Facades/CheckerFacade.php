<?php

namespace App\User\Facades;

use Illuminate\Support\Facades\Facade;

class CheckerFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Checker';
    }
}
