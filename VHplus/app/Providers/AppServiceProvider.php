<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        //
        $this->app->alias('Socialite', 'Laravel\Socialite\Facades\Socialite::class');
        $this->app->alias('Gemini', 'Gemini\Laravel\Facades\Gemini::class');


    }
}
