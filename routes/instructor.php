<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Enduser\InstructorDashboardController;



Route::get('dashboard', [InstructorDashboardController::class, 'index'])->name("dashboard");


//Profile 
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
Route::patch('/profile/{user}/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');
Route::patch('/profile/{user}/update-social-links', [ProfileController::class, 'updateSocialLinks'])->name('profile.update-social-links');
