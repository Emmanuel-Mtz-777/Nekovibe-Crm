<?php

use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->middleware('auth');

Route::get('/login',[AdminAuthController::class,'showLogin'])->name('login');
Route::post('/auth',[AdminAuthController::class,'login'])->name('authAdmin');