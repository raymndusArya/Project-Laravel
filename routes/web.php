<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/home', function () {
    return view('home');

});

Route::get('/about', function () {
    return view('about');

});

Route::get('/layout', function () {
    return view('layout');

});

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/admin/about', [AboutController::class, 'about']);

Route::get('/admin/student', [App\Http\Controllers\StudentController::class, 'index']);


