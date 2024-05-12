<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing\HomeController;
use App\Http\Controllers\Landing\EdukasiBencanaController;
use App\Http\Controllers\Landing\AboutUsController;

// No auth - landing
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/edukasi-bencana', [EdukasiBencanaController::class, 'index'])->name('edukasi-bencana');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.post');

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.post');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Auth - dashboard
Route::middleware('auth')->group(function () {
    Route::get('dashboard/user', [App\Http\Controllers\Dashboard\User\HomeController::class, 'index'])->name('user.home');
    Route::get('dashboard/admin', [App\Http\Controllers\Dashboard\Admin\HomeController::class, 'index'])->name('admin.home');
    Route::get('dashboard/admin/pengaduan', [App\Http\Controllers\Dashboard\Admin\ReportController::class, 'index'])->name('admin.report');
    Route::post('dashboard/admin/pengaduan/response', [App\Http\Controllers\Dashboard\Admin\ResponseController::class, 'store'])->name('admin.response.post');
    Route::get('dashboard/admin/pengaduan/report', [App\Http\Controllers\Dashboard\Admin\ReportController::class, 'generateReport'])->name('admin.report.generate');

    Route::get('dashboard/user/form-lapor', [App\Http\Controllers\Dashboard\User\FormLaporController::class, 'index'])->name('user.form-lapor');
    Route::post('dashboard/user/form-lapor', [App\Http\Controllers\Dashboard\User\FormLaporController::class, 'store'])->name('user.form-lapor.post');
});
