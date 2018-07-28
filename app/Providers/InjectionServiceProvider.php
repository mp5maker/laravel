<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InjectionServiceProvider extends ServiceProvider
{
    protected $defer = true;
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
        $this->app->bind(\App\Http\Controllers\InjectToController::class, function(){
            return new \App\Http\Controllers\InjectToController;
        });
    }

    public function provider(){
        return [\App\Http\Controllers\InjectToController::class];
    }
}
