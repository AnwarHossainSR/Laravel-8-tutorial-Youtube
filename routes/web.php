<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('student');
});

Route::post('/store', [StudentController::class,'Create']);