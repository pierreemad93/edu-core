<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Enduser\InstructorDashboardController;



Route::get('dashboard', [InstructorDashboardController::class, 'index'])->name("dashboard");
