<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;

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

// index routing via Route feature
Route::redirect('/', '/Dashboard');

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
|
*/
Route::view('/Dashboard', 'dashboard');
Route::view('/Shipping', 'shipping');
Route::view('/Discount', 'discount');

Route::prefix('products')->group(function () {
    Route::redirect('/', '/products/List');
    Route::view('List', 'products/list');
    Route::view('Detail', 'products/detail');

        // crud operation routes
        Route::get('Detail', [ProductController::class,'show'])->name('product.detail');
        Route::get('Create',[ProductController::class,'create'])->name('product.create');
        Route::post('Store', [ProductController::class,'store'])->name('product.store');
        Route::get('delete/{id}', [ProductController::class,'destory']);
        Route::get('edit/{id}', [ProductController::class,'edit']);    
        Route::put('update/{id}', [ProductController::class,'update'])->name('product.update');
});

Route::prefix('Orders')->group(function () {
    Route::redirect('/', '/Orders/List');
    Route::view('List', 'orders/list');
    Route::view('Detail', 'orders/detail');
});

Route::prefix('Customers')->group(function () {
    Route::redirect('/', '/Customers/List');
    Route::view('List', 'customers/list');
    Route::view('Detail', 'customers/detail');
});
Route::prefix('shop')->group(function () {
    Route::redirect('/', '/shop/Home');
    Route::view('Home', 'shop/home');
    Route::view('Filters', 'shop/filters');
    Route::view('Categories', 'shop/categories');
    // Route::view('add_shop', 'shop/add_shop');
    Route::view('Cart', 'shop/cart');
    Route::view('Checkout', 'shop/checkout');
    Route::view('Invoice', 'shop/invoice');

    // crud operation routes
    Route::get('Detail', [ShopController::class,'show'])->name('shop.detail');
    Route::get('Create',[ShopController::class,'create'])->name('create');
    Route::post('Create', [ShopController::class,'store'])->name('store');
    Route::get('delete/{id}', [ShopController::class,'destory']);
    Route::get('edit/{id}', [ShopController::class,'edit']);    
    Route::put('update/{id}', [ShopController::class,'update'])->name('update');    



});

Route::prefix('Settings')->group(function () {
    Route::view('/', 'settings/index');
    Route::view('General', 'settings/general');
});


