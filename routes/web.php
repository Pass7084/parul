<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

// Home page
Route::get('/', function () {
    return view('home');
});

// Part A: Dynamic route
Route::get('/hello/{your_name}', function ($your_name) {
    return 'Hello, ' . $your_name;
});

// Part A: Controller route
Route::get('/about', [AboutController::class, 'index']);

// Part B: Student resource routes
Route::resource('students', StudentController::class);

// Part C: Explicit route binding using roll number
Route::get('/roll/{your_roll}', function (Student $your_roll) {
    return view('students.show', ['student' => $your_roll]);
});
