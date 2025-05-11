<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Middleware\CheckRoleMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            //admin route
            Route::prefix('admin')
                ->as('admin.')
                ->group(base_path('routes/admin.php'));

            //student route
            Route::middleware('auth', 'verified', 'check_role:student')
                ->prefix('student')
                ->name('student.')
                ->group(base_path('routes/student.php'));

            //instructor route
            Route::middleware('auth', 'verified', 'check_role:instructor')
                ->prefix('instructor')
                ->name('instructor.')
                ->group(base_path('routes/instructor.php'));
        },

    )
    ->withMiddleware(function (Middleware $middleware) {
        //  
        $middleware->alias([
            'check_role' => CheckRoleMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
