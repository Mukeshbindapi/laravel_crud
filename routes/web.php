<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('register',[RegisterController::class,'register']);
Route::post('user/register',[RegisterController::class,'store']);
Route::post('user/login',[LoginController::class,'login']);

Route::prefix('user')->group(function(){
    Route::get('store',[UserController::class,'store']);
    Route::get('list',[UserController::class,'index']);
    Route::get('update/{id}',[UserController::class,'update']);
    Route::get('delete/{id}',[UserController::class,'delete']);
    Route::get('{id}',[UserController::class,'show']);
});


