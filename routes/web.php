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
use App\Http\Controllers\UtilityController;

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


@include('./jkweb.php');

Route::controller(AuthController::class)->group(function (){

    Route::get('/login','loginPage')->name('login');
    Route::post('/login','login')->name('login.store');
    Route::post('/logout','logout')->name('logout')->middleware('auth');
    Route::get('/reset-password','resetPassword')->name('resetPassword')->middleware('auth');
    Route::post('/resetPassword.store','resetPasswordStore')->name('resetPassword.store')->middleware('auth');

});


Route::middleware('auth')->group(function (){

    Route::get('/home',[HomeController::class,'index'])->name('home');

    Route::get('/', function () {
        return view('welcome');
    });



    Route::controller(UtilityController::class)->group(function(){
        Route::get('/settings','viewSetting')->name('viewSetting');
        Route::post('/setting-store','storeSetting')->name('storeSetting');
        Route::get('/profile','authInfo')->name('authInfo');
        Route::post('/profile-store','authUpdate')->name('authInfo.store');
    });




// course
    Route::resource('/courses', CourseController::class)->names('course');

// Batch
    Route::resource('/batches', BatchController::class)->names('batch');

    Route::resource('/instructors', InstructorController::class)->names('instructor');



// student

    Route::controller(StudentController::class)->name('student.')->group(function(){
        Route::get('/course-current-students','currentStudents')->name('current');
        Route::get('/course-completed-students','courseCompleted')->name('courseCompleted');

    });
    Route::resource('/students', StudentController::class)->names('student');

// fees controller
    Route::resource('/fees', FeesController::class)->names('fee');

// attendance
    Route::post('/attendance-list/{attendance}',[AttendanceController::class,'attendenceListStore'])->name('attendanceList.store');
    Route::resource('/attendances', AttendanceController::class)->names('attendance');

    // Message
    Route::controller(\App\Http\Controllers\MessageController::class)
        ->name('message.')->group(function (){
            Route::get('/bulk-sms','bulk')->name('bulk');
            Route::post('bulk-sms-send','bulkStore')->name('bulkStore');
            Route::get('/attendance-sms','attendance')->name('attendance');
            Route::get('due-sms','due')->name('due');
        });
// invoice
    Route::resource('/invoice', InvoiceController::class);

// reporte
    Route::resource('/report', ReportController::class);
});
