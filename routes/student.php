<?php

use App\Http\Controllers\Enduser\Student\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Enduser\StudentDashboardController;


Route::group(['middleware' => ['auth', 'verified', 'check_role:student'], 'prefix' => 'student', 'as' => 'student.'], function () {

    Route::controller(StudentDashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name("dashboard");
        Route::get('become-instructor',  'becomeInstructor')->name('become-instructor');
        Route::post('become-instructor/{user}', 'becomeInstructorDoc')->name('become-instructor.doc');
    });

    //Profile
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'index')->name('profile');
        Route::get('/profile/{user}/edit', 'edit')->name('profile.edit');
        Route::patch('/profile/{user}', 'update')->name('profile.update');
        Route::patch('/profile/{user}/update-password', 'updatePassword')->name('profile.update-password');
        Route::patch('/profile/{user}/update-social-links', 'updateSocialLinks')->name('profile.update-social-links');
    });
});
