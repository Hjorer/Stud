<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('home');

Route::get('/product/{slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
