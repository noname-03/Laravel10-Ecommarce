<?php

use App\Http\Controllers\Admin\CategoryProductController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->name('admin.')->middleware(['auth'])->group(
    function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::resource('/categoryProduct', CategoryProductController::class);
        Route::resource('/product', ProductController::class);

        Route::delete('/Product/{id}/delete-photo', [ProductController::class, 'deletePhoto'])->name('product.deletePhoto');
    }
);
