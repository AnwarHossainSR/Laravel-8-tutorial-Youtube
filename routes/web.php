<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/get/session', [SessionController::class,'accessSessionData']);
Route::get('/store/session', [SessionController::class,'storeSessionData']);
Route::get('/remove/session', [SessionController::class,'removeSessionData']);