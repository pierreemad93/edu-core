<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Enduser\StudentDashboardController;

Route::controller(StudentDashboardController::class)->group(function () {
    Route::get('dashboard', 'index')->name("dashboard");
    Route::get('become-instructor',  'becomeInstructor')->name('become-instructor');
    Route::post('become-instructor/{user}', 'becomeInstructorDoc')->name('become-instructor.doc');
});
