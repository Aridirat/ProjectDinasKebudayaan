<?php

use Illuminate\Support\Facades\Route;

//import product controller
use App\Http\Controllers\ProductController;

//route resource for products
Route::resource('/products', ProductController::class);

Route::get('/', function () {
    return view('index');
});

Route::get('/daftarbenda', function () {
    return view('daftarbenda');
});

Route::get('/kebudayaan', function () {
    return view('kebudayaan');
});

Route::get('/welcome', function () {
    return view('welcome');
});