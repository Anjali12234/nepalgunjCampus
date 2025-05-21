<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student\StudentAuthController;
use App\Http\Controllers\Student\TeacherController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('about', 'about')->name('about');
    Route::get('mission', 'mission')->name('mission');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('whyncmt', 'whyncmt')->name('whyncmt');
    Route::get('contact', 'contact')->name('contact');
    Route::get('registrationForm', 'registrationForm')->name('registrationForm');
    Route::get('team/{department}', 'facultyMember')->name('team');
    Route::get('programme/{programme:slug}', 'programme')->name('programme');
    Route::get('semester/{semester:slug}', 'semester')->name('semester');
    Route::get('teacher/{teacher:slug}', 'teacher')->name('teacher');
    Route::get('galleryList/{gallery:slug}', 'galleryList')->name('galleryList');
    Route::post('enrollmentForm', 'submitEnrollmentForm')->name('enrollmentForm');

    Route::post('registrationForm', 'submitRegistrationForm')->name('registrationForm.submit');
    Route::post('contact', 'submitContactForm')->name('contactForm');
});
Route::controller(StudentAuthController::class)->group(function () {
    Route::get('studentRegister', 'registerPage')->name('studentRegister');
    Route::get('studentLogin', 'loginPage')->name('studentLogin');
    Route::post('studentRegister', 'studentRegister')->name('studentRegister');
    Route::post('studentLogin', 'studentLogin')->name('studentLogin');
});



Route::post('upload', [UploadController::class, 'store'])->name('upload');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('file')->as('file.')->controller(FileController::class)->group(function () {
    Route::delete('{file}/delete', 'destroy')->name('destroy');
});
require __DIR__ . '/auth.php';
