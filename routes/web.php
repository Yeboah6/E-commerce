<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'scrape']);

Route::get('/index', [MainController::class, 'index']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/wishlist', [MainController::class, 'wishlist']);

Route::get('/cart', [MainController::class, 'cart']);

Route::get('/checkout', [MainController::class, 'checkout']);

Route::get('/contact', [MainController::class, 'contact']);

Route::get('/men', [MainController::class, 'men']);

Route::get('/order-complete', [MainController::class, 'orderComplete']);

Route::get('/product-detail', [MainController::class, 'productDetail']);

Route::get('/women', [MainController::class, 'women']);


