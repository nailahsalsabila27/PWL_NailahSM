<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

/*Home*/
Route::get('/', [HomeController::class, 'index']);

/*Products (Route Prefix)*/
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'food']);
    Route::get('/beauty-health', [ProductController::class, 'beauty']);
    Route::get('/home-care', [ProductController::class, 'homecare']);
    Route::get('/baby-kid', [ProductController::class, 'babykid']);
});

/*User*/
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

/*Penjualan*/
Route::get('/penjualan', [SalesController::class, 'index']);
