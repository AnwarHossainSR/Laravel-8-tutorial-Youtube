<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class,'index']);
Route::get('/student/edit/{id}', [StudentController::class,'edit'])->name('student.edit');
Route::put('/student/update/{id}', [StudentController::class,'update'])->name('student.updtae');
Route::get('/student/delete/{id}', [StudentController::class,'destroy'])->name('student.delete');

Route::post('/store', [StudentController::class,'Create']);