<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\AdmissionController;


/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| Admin Panel
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->name('admin.dashboard');


    /*
    |--------------------------------------------------------------------------
    | Courses
    |--------------------------------------------------------------------------
    */

    Route::resource('courses', CourseController::class);


    /*
    |--------------------------------------------------------------------------
    | Admissions
    |--------------------------------------------------------------------------
    */

    Route::resource('admissions', AdmissionController::class);

});


/*
|--------------------------------------------------------------------------
| Redirect Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    return redirect()->route('admin.dashboard');

})->middleware('auth')->name('dashboard');


Route::get('/courses', function () {

    return redirect()->route('courses.index');

})->middleware('auth')->name('courses');


Route::get('/teachers', function () {
    return redirect()->route('teachers.index');
})->middleware('auth')->name('teachers');


Route::get('/admissions', function () {
    return redirect()->route('admissions.index');
})->middleware('auth')->name('admissions');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';