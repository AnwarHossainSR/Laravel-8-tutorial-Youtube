<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TeacherController::class,'fetchData']);
Route::get('/students', [StudentController::class,'fetchStudents']);
