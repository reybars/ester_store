<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', [ProductController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/cart', [ProductController::class, 'cart']);

Route::post('/cart', [ProductController::class, 'addToCart'])->name('cart.add');

Route::delete('/cart/{id}', [ProductController::class, 'removeFromCart'])->name('cart.remove');