<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// ADMIN
Route::controller(AdminController::class)->group(function() { 
    Route::get('/','dashBoard')->middleware('auth:adminKaba');
    Route::get('/login','loginPage')->name('login');
    Route::post('/login','login');
    Route::post('/logout','logout');
});

// STUDENTS
Route::middleware('auth:adminKaba')->group(function(){
    Route::get('/students',            [StudentController::class, 'index'])->name('student.index');
    Route::get('/new-enrollees',       [StudentController::class, 'newEnrollees'])->name('newEnrollees');
    Route::get('/create-student',      [StudentController::class, 'create'])->name('student.create');
    Route::post('/store-student',      [StudentController::class, 'store'])->name('student.store');
    Route::get('/student-profile/{student}', [StudentController::class, 'profile'])->name('student.profile');
    Route::patch('/update/{student}',  [StudentController::class, 'update'])->name('student.update');
    Route::patch('/enrolled/{student}', [StudentController::class, 'enrolled'])->name('student.enrolled');
    Route::delete('/deny/{student}',[StudentController::class, 'deny'])->name('student.deny');
    Route::delete('/delete/{student}',[StudentController::class, 'delete'])->name('student.delete');
});

// TEACHERS
Route::middleware('auth:adminKaba')->group(function(){
    Route::get('/teachers', [TeacherController::class,'index'])->name('teacher.index');
    Route::get('/teacher-profile/{teacher}', [TeacherController::class, 'profile'])->name('teacher.profile');
});

//SECTIONS
Route::middleware('auth:adminKaba')->group(function(){
    Route::get('/sections', [SectionController::class, 'index'])->name('section.index');
    Route::get('/create-section', [SectionController::class, 'create'])->name('section.create');
    Route::get('/section-info/{section}', [SectionController::class, 'info'])->name('section.info');
    Route::post('/store-section', [SectionController::class, 'store'])->name('section.store');
});
