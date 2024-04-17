<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::name('auth.')
                ->group(base_path('routes/auth.php'));
            Route::name('FrontOffice.')
                ->group(base_path('routes/FrontOffice.php'));
            Route::name('BackOffice.')
                ->group(base_path('routes/BackOffice.php'));
        },

        
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
            '*'
           
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
