<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DisasterController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminController;
use App\Models\Scenario;


Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/student/login', function () {
    return view('student.login');
})->name('student.login');

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::get('/student/register', function () {
    return view('student.register');
})->name('student.register');

Route::get('/admin/register', function () {
    return view('admin.register');
})->name('admin.register');

Route::post('/students', [StudentsController::class, 'store'])->name('students.store');

Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');

Route::get('/disasters', [DisasterController::class, 'index'])->name('disasters.index');

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/admin-login', [AdminLoginController::class, 'login'])->name('admin-login');

Route::get('/disasters/{disaster_name}/scenario1', function ($disaster_name) {
    $scenario1 = Scenario::where('id', 1)->first();
    $scenario2 = Scenario::where('id', 2)->first();
    $scenario3 = Scenario::where('id', 3)->first();
    $scenario4 = Scenario::where('id', 4)->first();
    $scenario5 = Scenario::where('id', 5)->first();
    $scenario6 = Scenario::where('id', 6)->first();
    $scenario7 = Scenario::where('id', 7)->first();
    $scenario8 = Scenario::where('id', 8)->first();

    return view('disasters.'.$disaster_name.'.scenario1', compact('scenario1', 'scenario2', 'scenario3', 'scenario4', 'scenario5', 'scenario6', 'scenario7', 'scenario8'));
})->name('disasters.scenario1');


Route::post('/api/progress', [ProgressController::class, 'store'])->name('progress.store');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/admin/users', function () {
    return view('admin.users');
})->name('admin.users');

Route::get('/admin/scenarios', function () {
    return view('admin.scenarios');
})->name('admin.scenarios');

Route::get('/admin/sections', function () {
    return view('admin.sections');
})->name('admin.sections');

Route::get('/admin/disasters', function () {
    return view('admin.disasters');
})->name('admin.disasters');

Route::get('/admin/students', function () {
    return view('admin.students');
})->name('admin.students');