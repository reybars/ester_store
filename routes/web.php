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

Route::get('/cart', function () {
    return view('cart');
});