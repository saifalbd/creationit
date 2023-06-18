<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ReportController;
// frontend class
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\AdmissionController;






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

//=============================  auth routes ==============================

Route::get('/login',[AuthController::class,'loginPage'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.store');

Route::get('/home',[HomeController::class,'index'])->name('home');




//=============================  frontend routes ==============================
Route::get('/', [FrontendController::class, "index"])->name('frontend');
// it pages wil be dynamic
Route::get('/about-us', [FrontendController::class, "about"])->name('frontend.about');
Route::get('/mission-vision', [FrontendController::class, "mission"])->name('frontend.mission');
Route::get('/mission-vision', [FrontendController::class, "missionVision"])->name('frontend.mission');
Route::get('/strategy', [FrontendController::class, "strategy"])->name('frontend.strategy');
Route::get('/success', [FrontendController::class, "success"])->name('frontend.success');
// it pages wil be dynamic

Route::get('/team', [FrontendController::class, "instructor"])->name('frontend.instructor');
Route::get('/contact', [FrontendController::class, "contact"])->name('frontend.contact');
Route::get('/course', [FrontendController::class, "course"])->name('frontend.course');
Route::get('/syllabus', [FrontendController::class, "syllabus"])->name('frontend.syllabus');
Route::get('/verification', [FrontendController::class, "verificationCreate"])->name('frontend.verification.create');
Route::get('/verification-result', [FrontendController::class, "verificationResult"])->name('frontend.verification.result');
Route::get('/notice', [FrontendController::class, "notice"])->name('frontend.notice');
Route::get('/admission-form',[AdmissionController::class,'create'])->name('frontend.admission');


//=============================  backend routes ==============================
//course
Route::resource('/courses', CourseController::class)->names('course');
Route::get('/course-completed', [CourseController::class, 'courseComplete'])->name('course.complete');

// Batch
Route::resource('/batches', BatchController::class)->names('batch');

Route::resource('/instructors', InstructorController::class)->names('instructor');

Route::resource('/instructor', InstructorController::class);

// student
Route::resource('/student', StudentController::class);


// fees controller
Route::resource('/fees', FeesController::class);

// attendance
Route::resource('/attendance', AttendanceController::class);

// invoice
Route::resource('/invoice', InvoiceController::class);

// reporte
Route::resource('/report', ReportController::class);




