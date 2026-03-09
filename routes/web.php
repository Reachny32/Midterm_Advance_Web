<?php

use Illuminate\Support\Facades\Route;

Route::get('/midterm', function () {
    return "Welcome to Laravel Midterm Exam";
});

use App\Http\Controllers\StudentController;

Route::get('/student', [StudentController::class, 'showStudent']);

Route::get('/studentpage', function () {
    return view('student');
});