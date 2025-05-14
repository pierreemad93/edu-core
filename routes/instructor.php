<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Enduser\Instructor\ProfileController;
use App\Http\Controllers\Enduser\InstructorDashboardController;

Route::group(['middleware' => ['auth', 'verified', 'check_role:instructor'], 'prefix' => 'instructor', 'as' => 'instructor.'], function () {


    Route::get('dashboard', [InstructorDashboardController::class, 'index'])->name("dashboard");


    //Profile

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile');
        Route::get('/profile/{user}/edit', 'edit')->name('profile.edit');
        Route::patch('/profile/{user}', 'update')->name('profile.update');
        Route::patch('/profile/{user}/update-password', 'updatePassword')->name('profile.update-password');
        Route::patch('/profile/{user}/update-social-links', 'updateSocialLinks')->name('profile.update-social-links');
    });
});
