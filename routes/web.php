<?php

use App\Http\Controllers\Admin\CategoryProductController as AdminCategoryProductController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CategoryProductController as UserCategoryProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->name('admin.')->middleware(['role:admin', 'auth'])->group(
    function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::resource('/user', AdminUserController::class);
        Route::resource('/categoryProduct', AdminCategoryProductController::class);
        Route::resource('/product', AdminProductController::class);

        Route::delete('/Product/{id}/delete-photo', [AdminProductController::class, 'deletePhoto'])->name('product.deletePhoto');
    }
);

Route::name('user.')->middleware(['role:user', 'auth'])->group(
    function () {
        Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
        Route::resource('/cart', CartController::class);
    }
);

Route::get('/', [UserController::class, 'index']);
Route::get('/product/{id}', [UserProductController::class, 'show'])->name('product.show');
Route::get('/category/{id}', [UserCategoryProductController::class, 'show'])->name('category.show');