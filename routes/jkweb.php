<?php
// backend
use App\Http\Controllers\PageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SuccessStudentController;


// frontend class
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\AdmissionController;

Route::get('/', [FrontendController::class, "index"])->name('frontend');
// it pages wil be dynamic
Route::get('/about-us', [FrontendController::class, "about"])->name('frontend.about');
Route::get('/mission-vision', [FrontendController::class, "mission"])->name('frontend.mission');
Route::get('/mission-vision', [FrontendController::class, "missionVision"])->name('frontend.mission');
Route::get('/strategy', [FrontendController::class, "strategy"])->name('frontend.strategy');
Route::get('/success', [FrontendController::class, "success"])->name('frontend.success');
// it pages wil be dynamic

Route::get('/team', [FrontendController::class, "instructor"])->name('frontend.instructor');
Route::view('/contact', 'frontend/contact')->name('frontend.contact');
Route::post('/store', [FrontendController::class, 'store'])->name('contact.store');
Route::view('freelancing','frontend.course.freelancing')->name('course.freelancing');
Route::get('/course', [FrontendController::class, "course"])->name('frontend.course');
Route::get('/syllabus', [FrontendController::class, "syllabus"])->name('frontend.syllabus');
Route::get('/verification', [FrontendController::class, "verificationCreate"])->name('frontend.verification.create');
Route::get('/verification-result', [FrontendController::class, "verificationResult"])->name('frontend.verification.result');
Route::get('/news', [FrontendController::class, "news"])->name('frontend.news');
Route::get('/news/{detail}', [FrontendController::class, "newsDetail"])->name('news.detail');
Route::get('/admission-form',[AdmissionController::class,'create'])->name('frontend.admission');
Route::get('/success-student',[FrontendController::class, "StudentSuccess"])->name('success.student');
Route::get('about-us/{id}', [FrontendController::class, "aboutUs"])->name('about.us');
Route::get('founder', [FrontendController::class, "founder"])->name('founder');
Route::get('other-institute', [FrontendController::class, "otherInstitute"])->name('other.institute');



