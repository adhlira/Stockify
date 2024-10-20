<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('', [LoginController::class, 'LoginPage'])->name('login_page');

Route::get('sign_up', [SignUpController::class, 'SignUpPage'])->name('sign_up_page');

Route::post('action-sign_up', [SignUpController::class, 'AddUser'])->name('action-sign_up');

Route::post('action_login', [LoginController::class, 'Login'])->name('action-login');

Route::get('home', [HomeController::class, 'HomePage'])->name('home')->middleware('auth');

Route::get('logout', [LoginController::class, 'Logout'])->name('logout');
