<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('aboutus', 'aboutUs')->name('aboutus'); 
    Route::get('mission', 'mission')->name('mission'); 
    Route::get('whyNcmt', 'whyNcmt')->name('whyNcmt'); 
    Route::get('contact', 'contact')->name('contact'); 
    Route::get('programme/{programme:slug}','programme')->name('programme');
    Route::get('semester/{semester:slug}','semester')->name('semester');
    Route::get('teacher/{slug}', 'teacher')->name('teacher');
    Route::post('/rate-teacher', 'rateTeacher');

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
require __DIR__.'/auth.php';
