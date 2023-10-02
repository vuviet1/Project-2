<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Management\SchoolYearController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');

    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::prefix('school_year')->group(function () {
        Route::get('show', [SchoolYearController::class, 'index'])->name('school_year');
        Route::post('add_school_year', [SchoolYearController::class, 'store'])->name('add.school_year');
    });

    Route::get('major', [\App\Http\Controllers\Management\MajorController::class, 'index'])->name('major');

    Route::get('fee', [\App\Http\Controllers\Management\FeeController::class, 'index'])->name('fee');

    Route::get('student', [\App\Http\Controllers\Management\StudentController::class, 'index'])->name('student');

    Route::get('user', [\App\Http\Controllers\UserController::class, 'index'])->name('user');

    Route::get('tuition', [\App\Http\Controllers\Management\TuitionController::class, 'index'])->name('tuition');
});


