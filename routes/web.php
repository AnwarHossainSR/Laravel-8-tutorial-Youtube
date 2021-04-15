<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});

Route::middleware(['checkStatus'])->group(function () {
    Route::post('/home', [HomeController::class,'shoMessage']);
});