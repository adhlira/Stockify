<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('', [LoginController::class, 'LoginPage'])->name('login_page');

Route::get('sign_up', [SignUpController::class, 'SignUpPage'])->name('sign_up_page');

Route::post('action-sign_up', [SignUpController::class, 'AddUser'])->name('action-sign_up');
