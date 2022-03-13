<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseClassController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ClassDetailController;
use App\Http\Middleware\onlyadmin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);
//Route::get('/add_course/{id}', [CartController::class,'add_course']);
 Route::get('/coursedetails/{id}',[HomeController::class,'detail']);
Route::get('/courseclass/{course_id}/{id}',[HomeController::class,'classvideo']);
//Route::get('/dashboard', function () {
 //  return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::prefix('admin')->middleware(['auth',onlyAdmin::class])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::resource('/categories',CategoryController::class);
    Route::resource('/instructors',InstructorController::class);
    Route::resource('/courses',CourseController::class);
    Route::resource('/courseclasses',CourseClassController::class);

   // Route::get('/courses',[DashboardController::class,'index']);
});
require __DIR__.'/auth.php';
