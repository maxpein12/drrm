<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DisasterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/login', function () {
    return view('student.login');
})->name('student.login');

Route::get('/student/register', function () {
    return view('student.register');
})->name('student.register');

Route::post('/students', [StudentsController::class, 'store'])->name('students.store');

Route::get('/disasters', [DisasterController::class, 'index'])->name('disasters.index');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/disasters/{disaster_name}/scenario1', function ($disaster_name) {
    return view('disasters.'.$disaster_name.'.scenario1');
})->name('disasters.scenario1');