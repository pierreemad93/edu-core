<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        // web: __DIR__ . '/../routes/web.php',
        // admin: __DIR__ . '/../routes/admin.php',
        commands: __DIR__ . '/../routes/console.php',
        using: function () {
            Route::middleware('web')->group(base_path('routes/web.php'));
            Route::prefix('admin')
                ->as('admin.')
                ->group(base_path('routes/admin.php'));
        },
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
