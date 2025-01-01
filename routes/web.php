<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('welcome');
    Route::get('aboutus', 'aboutUs')->name('aboutus'); // Specify the method name here
    Route::get('mission', 'mission')->name('mission'); // Specify the method name here
    Route::get('whyNcmt', 'whyNcmt')->name('whyNcmt'); // Specify the method name here
    Route::get('contact', 'contact')->name('contact'); // Specify the method name here
    Route::get('programme/{programme:slug}','programme')->name('programme');
    Route::get('semester/{semester:slug}','semester')->name('semester');
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
