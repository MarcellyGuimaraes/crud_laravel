<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// As rotas vêm sem o Create e Edit
// Route::apiResource("/products", App\Http\Controllers\ProductsController::class);

Route::resource("/products", App\Http\Controllers\ProductsController::class);
