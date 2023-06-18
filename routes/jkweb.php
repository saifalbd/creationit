<?php

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
Route::get('/contact', [FrontendController::class, "contact"])->name('frontend.contact');
Route::get('/course', [FrontendController::class, "course"])->name('frontend.course');
Route::get('/syllabus', [FrontendController::class, "syllabus"])->name('frontend.syllabus');
Route::get('/verification', [FrontendController::class, "verificationCreate"])->name('frontend.verification.create');
Route::get('/verification-result', [FrontendController::class, "verificationResult"])->name('frontend.verification.result');
Route::get('/notice', [FrontendController::class, "notice"])->name('frontend.notice');
Route::get('/admission-form',[AdmissionController::class,'create'])->name('frontend.admission');


Route::middleware(['auth'])->group(function () {
    
});