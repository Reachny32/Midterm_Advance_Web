<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', [LoginController::class, 'dashboard'])->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');