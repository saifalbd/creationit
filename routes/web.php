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
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\VoucherLedgerController;
use App\Services\ChartInfoService;
use App\Services\MessageSender;

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

Route::get('/clear',[UtilityController::class,'clearCaches']);
Route::get('/add',[UtilityController::class,'addCaches']);


Route::get('/test', function () {
    $rep = new MessageSender();
    $rep->sendBulk([
        [
            'to'=>'+8801732221635',
        'message'=>'আপনার OTP কোড হলো 7863'
        ],
        [
            'to'=>'+8801312288425',
        'message'=>'আপনার OTP কোড হলো 7863'
        ]
    ]);

    return 'send';
});


Route::controller(AuthController::class)->group(function (){

    Route::get('/login','loginPage')->name('login');
    Route::post('/login','login')->name('login.store');
    Route::post('/logout','logout')->name('logout')->middleware('auth');
    Route::get('/reset-password','resetPassword')->name('resetPassword')->middleware('auth');
    Route::post('/resetPassword.store','resetPasswordStore')->name('resetPassword.store')->middleware('auth');

});
Route::get('/',[AuthController::class,'loginPage']);

Route::middleware('auth')->group(function (){

    Route::get('/home',[HomeController::class,'index'])->name('home');

    Route::resource('/users',UserController::class)->names('user');
   
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
        Route::get('/info-id-card/{student}','idCard')->name('idCard');
        Route::get('/info-attendance/{student}','attendance')->name('attendance');
        Route::get('/student-add-payment/{student}','addPayment')->name('addPayment');
        Route::get('/student-certification/{student}','certification')->name('certification');
        Route::get('/student-certification/{student}/view','certificationView')->name('certification.view');

    });
    Route::resource('/students', StudentController::class)->names('student');
    Route::get('show-student-by-form',[StudentController::class,'showStudentByForm'])->name('showStudentByForm');

// fees controller
    Route::resource('/fees', FeesController::class)->names('fee');

    Route::resource('/vouchers',VoucherController::class)->names('voucher');
    Route::resource('/ledgers', VoucherLedgerController::class)->names('ledger');

// attendance
    
    Route::resource('/attendances', AttendanceController::class)->names('attendance');

    // Message
    Route::controller(\App\Http\Controllers\MessageController::class)
        ->name('message.')->group(function (){
            Route::get('/bulk-sms','bulk')->name('bulk');
            Route::post('bulk-sms-send','bulkStore')->name('bulkStore');
            Route::get('/attendance-sms','attendance')->name('attendance');
            Route::get('attendance-form','attendanceForm')->name('attendanceForm');
            Route::post('attendance-form-store','attendanceFormStore')->name('attendanceFormStore');
            Route::get('due-sms','due')->name('due');
        });
// invoice
    Route::resource('/invoices', InvoiceController::class)->names('invoice');

// reporte
    Route::controller(ReportController::class)->prefix('/reports')->name('report.')->group(function (){
        Route::get('','index')->name('index');
        Route::get('/preview_admission_date_wise','admissionDateWise')->name('admissionDateWise');
        Route::get('/preview_admission_course_date_wise','admissionDateCourseWise')->name('admissionDateCourseWise');

     

Route::get('/earn-expense-report','earnExpenseReport')->name('earnExpenseReport');
Route::get('/transaction-summary-report','transactionSummaryReport')->name('transactionSummaryReport');
Route::get('/transaction-category-report','transactionCategoryReport')->name('transactionCategoryReport');
Route::get('/transaction-report','transactionReport')->name('transactionReport');
Route::get('/date-wise-fee-collection','dateWiseFeeCollection')->name('dateWiseFeeCollection');
Route::get('/fee-due-report','feeDueReport')->name('feeDueReport');

    });
});
