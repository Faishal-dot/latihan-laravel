<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about',[
        'nama' => 'Faishal',
        'umur' => 20,
        'alamat' => 'jl. israel hama',
    ]);
});

Route::view('/contact','pages.contact');

// satu controller

Route::get('/product',[ProdukController::class,'index']); // read data menampilkan data

Route::get('/product/tambah',[ProdukController::class,'tambahProduk']);