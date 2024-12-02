<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GeneralQuestionController;
use App\Http\Controllers\Admin\ProgrammeController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SystemSettingController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');
Route::resource('systemSetting', SystemSettingController::class);
Route::resource('slider', SliderController::class);
Route::resource('about', AboutController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('generalQuestion', GeneralQuestionController::class);

Route::prefix('programme')->group(function () {
    Route::resource('programme', ProgrammeController::class);
    Route::resource('semester', SemesterController::class);
    Route::resource('course', CourseController::class);
});