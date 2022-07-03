<?php

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

Route::prefix('admin')->group(function(){

    Route::controller(CategoryController::class)->group(function () {
        Route::get('category', 'index')->name('category.list');
        // Route::get('/students/create', 'create')->name('students.create');
        // Route::post('/students', 'store')->name('students.store');
        // Route::get('/students/edit/{students}', 'edit')->name('student.edit');
        //  Route::post('/students/{students}', 'update')->name('students.update');
        //  Route::get('/students/{students}', 'destroy')->name('students.delete');
        
    });
    
});