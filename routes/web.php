<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [PageController::class, 'home']);

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/{id}', [PageController::class, 'product']);

Route::get('/contact', [PageController::class, 'contact']);
