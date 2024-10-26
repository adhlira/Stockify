<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('', [LoginController::class, 'LoginPage'])->name('login_page');

Route::get('sign_up', [SignUpController::class, 'SignUpPage'])->name('sign_up_page');

Route::get('home', [HomeController::class, 'HomePage'])->name('home')->middleware('auth');

Route::get('logout', [LoginController::class, 'Logout'])->name('logout');

Route::get('dashboard', [DashboardController::class, 'DashboardPage'])->name('dashboard');

Route::get('categories', [CategoryController::class, 'CategoriesPage'])->name('categories');

Route::get('add-category', [CategoryController::class, 'AddCategoryPage'])->name('add-category');

Route::get('edit-category/{slug}', [CategoryController::class, 'EditCategoryPage'])->name('edit-category');

Route::get('products', [ProductController::class, 'ProductPage'])->name('product_page');

Route::get('add-product', [ProductController::class, 'AddProductPage'])->name('add_product_page');

Route::get('edit-product/{slug}', [ProductController::class, 'EditProductPage'])->name('edit_product_page');

Route::get('search-product', [ProductController::class, 'SearchProduct'])->name('search_product');

Route::get('sort-product', [ProductController::class, 'SortbyCategory'])->name('sort-product');

Route::get('/404', function(){
    return view('404');
});

Route::post('action-add-product', [ProductController::class, 'AddProduct'])->name('action_add_product');

Route::post('action-sign_up', [SignUpController::class, 'AddUser'])->name('action-sign_up');

Route::post('action_login', [LoginController::class, 'Login'])->name('action-login');

Route::post('action-add-category', [CategoryController::class, 'Add'])->name('action-add-category');

Route::put('action-edit-category/{id}', [CategoryController::class, 'Edit'])->name('action-edit-category');

Route::put('action-edit/{id}', [ProductController::class, 'EditProduct'])->name('action-edit-product');

Route::delete('action-delete-category/{id}', [CategoryController::class, 'DeleteCategory'])->name('action-delete-category');

Route::delete('action-delete-product/{id}', [ProductController::class, 'DeleteProduct'])->name('action-delete-product');
