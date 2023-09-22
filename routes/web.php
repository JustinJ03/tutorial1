<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::controller(ProductController::class)->prefix('/products')->as('products.')->group(function() {
    Route::get('/index', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/show/{product}', 'show')->name('show');
    Route::get('/edit/{product}', 'edit')->name('edit');
    Route::post('/update/{product}', 'update')->name('update');
    Route::get('/destroy/{product}', 'destroy')->name('destroy');
    Route::post('/search', 'search')->name('search');
});




