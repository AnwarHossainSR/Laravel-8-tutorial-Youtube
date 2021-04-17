<?php

use App\Http\Controllers\UriController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UriController::class,'retriveUri']);
Route::post('/user/register', [UriController::class,'showData']);