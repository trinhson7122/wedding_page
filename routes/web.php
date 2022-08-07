<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TypeCategoryProductController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/admin');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::view('/', 'admin.index');
    Route::group(['prefix' => 'manage', 'as' => 'manage.'], function () {
        //product
        Route::get('/san-pham', [TypeCategoryProductController::class, 'index'])->name('product-index');
        Route::post('/store-type', [TypeController::class, 'store'])->name('store-type');
        Route::post('/store-category', [CategoryController::class, 'store'])->name('store-category');
        Route::post('/store-product', [ProductController::class, 'store'])->name('store-product');
        Route::put('/update-product/{product}', [ProductController::class, 'update'])->name('update-product');
        Route::delete('/destroy-product/{product}', [ProductController::class, 'destroy'])->name('destroy-product');
        Route::get('/edit-product/{product}', [ProductController::class, 'edit'])->name('edit-product');
        //account
        Route::get('khach-hang', [AccountController::class, 'index'])->name('customer-index');
        Route::post('/store-account', [AccountController::class, 'store'])->name('store-account');
    });
});
