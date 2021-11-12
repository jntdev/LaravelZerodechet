<?php
namespace App\User\Facades;
use Illuminate\Support\Facades\Facade;

class CheckerFacade extends Facade{

    protected static function getFacadeAccessor() { return 'Checker'; }
}