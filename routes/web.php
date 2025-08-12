<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about',[
        'nama' => 'Fais Faishal',
        'umur' => 20,
        'alamat' => 'Indonesia',
    ]);
});

Route::get('/about/{id}/detail',function($id){
    return view('pages.detail',[
        'nomer'=>$id
    ]);
});

Route::view('/contact','pages.contact');
