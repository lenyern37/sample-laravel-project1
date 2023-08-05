<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/insert', [ProductController::class, 'insert'])->name('product.insert');

/*Route::get('/product', function () {
    return view('products.index');
});*/
//Route::view('/','welcome');
//Route::get('/product', [ProductController::class, 'index']);
//Route::view('/product', 'products.index');