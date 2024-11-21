<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AuthController;


Route::get('/', [AuthController::class,'index'])->name('login');
Route::get('/signin', [AuthController::class,'signin'])->name('signin');
Route::post('/dosignin', [AuthController::class,'storeuser'])->name('dosignin');
Route::get('/dologin', [AuthController::class,'makelogin'])->name('dologin');
Route::resource('image', ImageController::class);
