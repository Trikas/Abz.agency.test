<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class genNameServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('genName', function(){

            return new App\Helpers\Facades\genName;
        });
    }
}
