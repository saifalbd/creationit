<?php
// backend
use App\Http\Controllers\PageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SuccessStudentController;
use App\Http\Controllers\AchivementController;
use App\Http\Controllers\Frontend\SeminarController;




// frontend class
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\AdmissionController;

Route::get('/', [FrontendController::class, "index"])->name('frontend');
// it pages wil be dynamic
Route::get('/about-us', [FrontendController::class, "about"])->name('frontend.about');

Route::get('/success', [FrontendController::class, "success"])->name('frontend.success');
// it pages wil be dynamic

Route::get('/team', [FrontendController::class, "instructor"])->name('frontend.instructor');
Route::view('/contact', 'frontend/contact')->name('frontend.contact');
Route::post('/store', [FrontendController::class, 'store'])->name('contact.store');
Route::get('/freelancing', [FrontendController::class, 'freelancing'])->name('course.freelancing');
Route::get('/freelancing/post/{id}', [FrontendController::class, 'singleFreelancing'])->name('single.freelancing');
Route::get('/course', [FrontendController::class, "course"])->name('frontend.course');
Route::get('/course-detail/{id}', [FrontendController::class, "courseDetail"])->name('single.course');
Route::get('apply/seminar',[SeminarController::class, 'create'])->name('seminar.create');
Route::post('seminar/store',[SeminarController::class, 'store'])->name('seminar.store');
Route::get('seminar/applies',[SeminarController::class, 'index'])->name('seminar.index');
Route::get('seminar/destroy/{id}',[SeminarController::class, 'destroy'])->name('seminar.student.destroy');
Route::post('seminar/status',[SeminarController::class, 'changeStatus'])->name('change.status');

Route::get('/syllabus', [FrontendController::class, "syllabus"])->name('frontend.syllabus');
// Route::get('/verification-result', [FrontendController::class, "verificationResult"])->name('frontend.verification.result');
Route::get('/news', [FrontendController::class, "news"])->name('frontend.news');
Route::get('/news/{detail}', [FrontendController::class, "newsDetail"])->name('news.detail');
Route::get('/admission-form',[AdmissionController::class,'create'])->name('frontend.admission');
Route::get('/verification', [AdmissionController::class, "verificationCreate"])->name('frontend.verification.create');
Route::post('/check/verification',[AdmissionController::class,'checkVerification'])->name('check.verification');

Route::get('/success-student',[FrontendController::class, "StudentSuccess"])->name('success.student');
Route::post('/student-search',[FrontendController::class, "searchStudent"])->name('student.search');
Route::get('about-us', [FrontendController::class, "aboutUs"])->name('about.us');
Route::get('founder', [FrontendController::class, "founder"])->name('founder');
Route::get('other-institute', [FrontendController::class, "otherInstitute"])->name('other.institute');
Route::get('other-institute', [FrontendController::class, "otherInstitute"])->name('other.institute');




Route::middleware(['auth'])->group(function () {
    Route::resource('/page', PageController::class);
    Route::get('download/file/{id}', [PageController::class, 'Download'])->name('download.file');
    Route::resource('successfull', SuccessStudentController::class);
    Route::resource('achivement', AchivementController::class);
    Route::get('hero/create',[AchivementController::class, 'heroCreate'])->name('hero.create');
    Route::post('hero/store',[AchivementController::class, 'heroStore'])->name('hero.store');
    
    Route::get('video/create',[SliderController::class, 'Videocreate'])->name('video.create');
    Route::post('video/update',[SliderController::class, 'videoUpdate'])->name('video.update');
    Route::get('slider/create', [SliderController::class, 'create'])->name('slider.create');
    Route::post('slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('slider/destroy/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');
    Route::get('contact/view', [SliderController::class, 'contactView'])->name('contact.show');
    Route::post('contact', [SliderController::class, 'delete'])->name('contact.delete');
    

});
