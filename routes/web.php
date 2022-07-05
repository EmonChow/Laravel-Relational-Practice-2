<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Route::prefix('admin')->group(function(){

    Route::controller(CategoryController::class)->group(function () {
        Route::get('category', 'index')->name('category.list');
        Route::get('/category/create', 'create')->name('category.create');
        Route::post('/category', 'store')->name('category.store');
         Route::get('/category/edit/{id}', 'edit')->name('category.edit');
          Route::post('/category/{id}', 'update')->name('category.update');
          Route::get('/category/{category}', 'destroy')->name('category.delete');
        
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('product', 'index')->name('product.list');
        Route::get('/product/create', 'create')->name('product.create');
         Route::post('/product', 'store')->name('product.store');
        Route::get('/product/edit/{product}', 'edit')->name('product.edit');
          Route::post('/product/{product}', 'update')->name('product.update');
          Route::get('/product/{product}', 'destroy')->name('product.delete');
        
    });



    
});