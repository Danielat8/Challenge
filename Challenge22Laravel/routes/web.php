<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('index');
});


Route::get('/', [UsersController::class, 'index'])->name('home');
Route::get('/login', [UsersController::class, 'showLoginForm'])->name('login');
Route::post('/info', [UsersController::class, 'storeInfo'])->name('storeInfo');
Route::get('/info', [UsersController::class, 'showInfo'])->name('info');
Route::post('/logout', [UsersController::class, 'logout'])->name('logout');
