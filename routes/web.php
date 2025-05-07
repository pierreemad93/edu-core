<?php

use App\Http\Controllers\Admin\InstructorRequestController;
use App\Http\Controllers\Enduser\EnduserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Enduser\StudentDashboardController;
use App\Http\Controllers\Enduser\InstructorDashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EnduserController::class, 'index']);

Route::group(['middleware' => ['auth', 'verified', 'check_role:student'], 'prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('dashboard', [StudentDashboardController::class, 'index'])->name("dashboard");
    Route::get('become-instructor', [StudentDashboardController::class, 'becomeInstructor'])->name('become-instructor');
    Route::post('become-instructor/{user}', [StudentDashboardController::class, 'becomeInstructorDoc'])->name('become-instructor.doc');
});


Route::group(['middleware' => ['auth', 'verified', 'check_role:instructor'], 'prefix' => 'instructor', 'as' => 'instructor.'], function () {
    Route::get('dashboard', [InstructorDashboardController::class, 'index'])->name("dashboard");
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth:admin', 'verified'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('instructor-request/doc-download/{user}', [InstructorRequestController::class, 'download'])->name('instructor-request.download');
    Route::resource('instructor-request', InstructorRequestController::class);
});




require __DIR__ . '/auth.php';
