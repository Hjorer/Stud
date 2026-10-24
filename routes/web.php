<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('home');

Route::get('/product/{slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

Route::post('/cart/add', [\App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::get('/cart/show', [\App\Http\Controllers\CartController::class, 'show'])->name('cart.show');
