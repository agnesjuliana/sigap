<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\HomeController;
use App\Http\Controllers\landing\EdukasiBencanaController;
use App\Http\Controllers\landing\AboutUsController;

// No auth - landing
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/edukasi-bencana', [EdukasiBencanaController::class, 'index'])->name('edukasi-bencana');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.post');

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.post');
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', function () {
    return view('dashboard');
})->name('home')->middleware('auth');