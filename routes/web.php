<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FeesController;




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
Route::resource('course', CourseController::class);

// Batch
Route::resource('batch', BatchController::class);

// instructor
Route::resource('instructor', InstructorController::class);

// student
Route::resource('student', StudentController::class);

// fees controller
Route::resource('fees', FeesController::class);










