<?php

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('users', function () {
    return \App\Models\User::all(); // Devuelve todos los usuarios como respuesta
});

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);

