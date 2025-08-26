@extends('layouts.master')

@section('konten')
<h1>Detail Produk</h1>
<hr>
<div class="card">
    <div class="card-header">
        Detail Produk
    </div>

    <div class="card-body">
        <p>Nama produk : {{$produk->nama_produk}} </p>
        <p>Harga : Rp.{{$produk->harga}} </p>
        <p>Deskripsi : {{$produk->deskripsi_produk}} </p>
        <p>Kategori : Barang Elektronik </p>
        <a href="/product"class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection