<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login.index');
});

Route::resource('products', ProductController::class);
// Route::get('/admin/pembelian', function (){
//     return view('admin.pembelian');
// });
// Route::get('/admin/produk', function (){
//     return view('admin.produk');
// });

Route::get('/cashier', function (){
    return view('cashier.pembelian');
});