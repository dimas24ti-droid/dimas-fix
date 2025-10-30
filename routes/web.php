<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\perpustakaanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/perpustakaan', function () {
    return 'Selamat Datang di Website !';
});

Route::get('/pustakawan', function () {
    return 'Hallo pustakawan';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya : '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'Nim saya : '.$param1;
});

Route::get('/pustakawan/{param1}', [perpustakaanController::class, 'show']);
Route::get('/pustakawan/show/{param1}', [perpustakaanController::class, 'show']);

Route::get('/{param1}', [BukuController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/pustakawan/{param1}', [BukuController::class, 'show']);
Route::get('//show/{param1}', [BukuController::class, 'show']);

Route::get('/home', [HomeController::class, 'index']) ->name('home');
Route::post('question/store', [QuestionController::class, 'store'])->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('user', UserController::class);
