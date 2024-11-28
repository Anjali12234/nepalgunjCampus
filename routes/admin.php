<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SystemSettingController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');
Route::resource('systemSetting', SystemSettingController::class);
Route::resource('slider', SliderController::class);
Route::resource('about', AboutController::class);

