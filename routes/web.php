<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
Route::get('/masuk',[AuthController::class,'loginForm'])->name('masuk');
Route::post('/login',[AuthController::class,'login']);
Route::get('/', function () {
    return view('home');
});