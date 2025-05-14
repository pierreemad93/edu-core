<?php

use App\Http\Controllers\Enduser\Student\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Enduser\StudentDashboardController;

Route::controller(StudentDashboardController::class)->group(function () {
    Route::get('dashboard', 'index')->name("dashboard");
    Route::get('become-instructor',  'becomeInstructor')->name('become-instructor');
    Route::post('become-instructor/{user}', 'becomeInstructorDoc')->name('become-instructor.doc');
});


//Profile 
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
Route::patch('/profile/{user}/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');
Route::patch('/profile/{user}/update-social-links', [ProfileController::class, 'updateSocialLinks'])->name('profile.update-social-links');

