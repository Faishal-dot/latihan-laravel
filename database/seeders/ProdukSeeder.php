<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tb_produk')->insert([
        [
            'nama_produk'=>'Smart TV Samsung 24 Inch',
            'harga'=>'15000000',
            'deskripsi_produk'=>'Ini adalah sebuah deskripsi dummy',
            'kategori_id'=>'2',
            'created_at'=>now()
        ],[
            'nama_produk'=>'Laptop Predator',
            'harga'=>'25000000',
            'deskripsi_produk'=>'Ini adalah sebuah deskripsi dummy',
            'kategori_id'=>'2',
            'created_at'=>now()
        ],[
            'nama_produk'=>'Smartwatch',
            'harga'=>'73000000',
            'deskripsi_produk'=>'Ini adalah sebuah deskripsi dummy',
            'kategori_id'=>'2',
            'created_at'=>now()
        ]
        ]);
    }
}
