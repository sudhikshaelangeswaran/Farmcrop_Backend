<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.login');
});


Route::get('/admin/login', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.login');
Route::post('/admin/authentication', [App\Http\Controllers\HomeController::class, 'login'])->name('admin.log.auth');

Auth::routes();



Route::middleware(['auth:web'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/products', [App\Http\Controllers\AdminController::class, 'products'])->name('admin.products');
    Route::get('admin/products/create', [App\Http\Controllers\AdminController::class, 'productcreate'])->name('admin.products.create');
    Route::get('admin/farms', [App\Http\Controllers\AdminController::class, 'farms'])->name('admin.farms');
    Route::get('admin/farms/create', [App\Http\Controllers\AdminController::class, 'farmcreate'])->name('admin.farmhouse.create');
    Route::get('admin/categories', [App\Http\Controllers\AdminController::class, 'categories'])->name('admin.categories');
    Route::get('admin/category/create', [App\Http\Controllers\AdminController::class, 'categorycreate'])->name('admin.category.create');
    Route::get('admin/category/edit/{id}', [App\Http\Controllers\AdminController::class, 'categoryedit'])->name('admin.category.edit');
    Route::post('admin/category/update/{id}', [App\Http\Controllers\AdminController::class, 'categoryupdate'])->name('admin.category.update');
    Route::get('admin/category/delete/{id}', [App\Http\Controllers\AdminController::class, 'categorydelete'])->name('admin.category.delete');
    Route::post('/admin/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('admin.logout');
});


