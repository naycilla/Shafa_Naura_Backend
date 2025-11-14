<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // controller untuk mengelola produk
use App\Http\Controllers\TransactionController; // controller untuk mengelola produk


// route ke home page
Route::get('/', function () {
    return view('layout');
});

// route ke product
Route::get('/products', [ProductController::class, 'index']); // buka homepage
Route::get('/products/create', [ProductController::class, 'create']); // buka halaman create
Route::post('/products', [ProductController::class, 'store']); // simpan data dari halaman create
Route::get('/products/{id}/edit', [ProductController::class, 'edit']); // buka halaman edit
Route::put('/products/{id}', [ProductController::class, 'update']); // simpan update dari halaman edit
Route::delete('/products/{id}', [ProductController::class, 'delete']); // hapus product

Route::get('/transactions', [TransactionController::class, 'index']); // buka homepage transaksi

Route::get('/transactions/{product_id}/create', [TransactionController::class, 'create']); // buka halaman transaksi baru
Route::post('/transactions', [TransactionController::class, 'store']); // simpan data dari halaman create transaksi
