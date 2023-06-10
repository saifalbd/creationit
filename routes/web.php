<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\InstructorController;



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


Route::get('/login',[AuthController::class,'loginPage'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.store');

Route::get('/home',[HomeController::class,'index'])->name('home');



Route::get('/', function () {
    return view('welcome');
});

// course
Route::resource('/courses', CourseController::class)->names('course');

// Batch
Route::resource('/batches', BatchController::class)->names('batch');

// instructor
Route::resource('/instructors', InstructorController::class)->names('instructor');