<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('session');
});
Route::post('/store', [SessionController::class,'flashMessage']);
