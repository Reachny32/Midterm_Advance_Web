<?php

use Illuminate\Support\Facades\Route;

// Part C routes
Route::get('/midterm', function () {
    return "Welcome to Laravel Midterm Exam";
});

use App\Http\Controllers\StudentController;

Route::get('/student', [StudentController::class, 'showStudent']);

Route::get('/studentpage', function () {
    return view('student');
});

// Part D routes
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/dashboard', [LoginController::class, 'dashboard'])->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');