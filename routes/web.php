<?php

use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->name('admin.')->middleware(['role:admin', 'auth'])->group(
    function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::resource('/categoryProduct', CategoryProductController::class);
        Route::resource('/product', ProductController::class);

        Route::delete('/Product/{id}/delete-photo', [ProductController::class, 'deletePhoto'])->name('product.deletePhoto');
    }
);

Route::name('user.')->middleware(['role:user', 'auth'])->group(
    function () {
        Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
        Route::get('/product/{id}', [UserController::class, 'productshow'])->name('product.show');
    }
);

Route::get('/', [UserController::class, 'index']);