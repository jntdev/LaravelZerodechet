<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User\Checker;
class CheckerFacadeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('Checker',function(){
            return new Checker();
        });
    }
}
