<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // controller untuk mengelola produk
use App\Http\Controllers\TransactionController; // controller untuk mengelola produk


// route ke home page
Route::get('/', function () {
    return view('home');
});

// route ke product
Route::get('/products', [ProductController::class, 'index']); // read 
Route::get('/products/create', [ProductController::class, 'create']); // buka halaman create
Route::post('/products', [ProductController::class, 'store']); // simpan data yang di create

Route::get('/transactions', [TransactionController::class, 'index']); // buka homepage transaksi
