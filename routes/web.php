<?php

use App\Http\Controllers\Admin\InstructorRequestController;
use App\Http\Controllers\Enduser\EnduserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EnduserController::class, 'index'])->name('home');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => ['auth:admin', 'verified'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::group([
        'prefix' => 'instructor-request',
        'as' => 'instructor-request.',
        'controller' => InstructorRequestController::class
    ], function () {
        Route::get('/', 'index')->name('index');
        Route::get('doc-download/{user}',  'download')->name('download');
        Route::put('{instructor_request}', 'update')->name('update');
    });
});



require __DIR__ . '/auth.php';
