<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyProvider extends ServiceProvider
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
        $this->app->router->get('/providerservice', function(){
            return "Simple Provider Service Test";
        });

        // $this->app->router->get('/deferredprovider', 'App\Http\Controllers\InjectFromController@read');
    }
}
