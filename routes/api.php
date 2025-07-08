<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/createUser',[UserAuthController::class,'createUser'])->name('createUser');
Route::post('/login',[UserAuthController::class,'login'])->name('login');