<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        if(env('APP_ENV') === 'local'){
            URL::forceScheme('http');
        }else{
            URL::forceScheme('https');
        }
    }
}
