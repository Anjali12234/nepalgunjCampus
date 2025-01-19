<?php

use App\Http\Controllers\Student\StudentAuthController;
use App\Http\Controllers\Student\StudentDetailController;
use App\Http\Controllers\Student\TeacherController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('student.dashboard');
})->name('dashboard');

Route::resource('teacher', TeacherController::class);
Route::post('/studentLogout', [StudentAuthController::class, 'logout'])->name('studentLogout');
// Route::post('/teacher/{id}/rate', [TeacherController::class, 'rateTeacher'])->name('teacher.rate');
Route::post('/teacher/{teacher}/rate', [TeacherController::class, 'rateTeacher'])->name('teacher.rate');
Route::post('/teacher/{teacher}/rateTeachingSkill', [TeacherController::class, 'rateTeachingSkill'])->name('teacher.rateTeachingSkill');
Route::post('/teacher/{teacher}/rateCommunicationSkill', [TeacherController::class, 'rateCommunicationSkill'])->name('teacher.rateCommunicationSkill');
Route::post('/teacher/{teacher}/rateSubjectKnowledge', [TeacherController::class, 'rateSubjectKnowledge'])->name('teacher.rateSubjectKnowledge');
Route::post('/teacher/{teacher}/rateClassPerformance', [TeacherController::class, 'rateClassPerformance'])->name('teacher.rateClassPerformance');
Route::post('/teacher/{teacher}/rateInteractiveTeaching', [TeacherController::class, 'rateInteractiveTeaching'])->name('teacher.rateInteractiveTeaching');

Route::resource('studentDetail',StudentDetailController::class);
Route::put('password', [StudentAuthController::class, 'update'])->name('password.update');
Route::delete('profile', [StudentAuthController::class, 'destroy'])->name('profile.destroy');
