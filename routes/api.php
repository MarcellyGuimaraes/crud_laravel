<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\ProductsController;

Route::middleware('auth:api')->group( function () {
    Route::resource("/products", ProductsController::class);
});

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

