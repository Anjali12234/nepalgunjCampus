<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
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
