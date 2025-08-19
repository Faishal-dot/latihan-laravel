<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(){
        $toko = [
            'nama_toko'=>'Makmur Jaya Abadi',
            'alamat'=>'Jalan TelAviv',
            'type'=>'Ruko'
        ];
        $produk = produk::get(); // query untuk mengambil semua data yang berada di tb_produk
        //$queryBuilder = DB::table('tb_produk')->get();
        return view('pages.produk.show',[
            'data_toko'=>$toko,
            'data_produk'=>$produk,
        ]);
    }

    public function tambahProduk(){
        return view('pages.addProduct');
    }
}
