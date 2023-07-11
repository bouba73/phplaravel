<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\FormulairController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;

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

Route::get('/home', [HomeController::class, 'Home']);


Route::get('/product/{id}', [ProductController::class, 'ProductId']);



Route::get('/product-list', [ProductController::class, 'Product_list']);


Route::get('/cart', [CartController::class, 'Cart']);


Route::get('/formulair', [FormulairController::class, 'formulair']);



Route::get('/product-details/{id}', [ProductDetailController::class,'details'])->name('product.details');

