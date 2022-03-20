@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="card card-outline card-primary mt-3">
    <div class="card-header">
        <h3 class="card-title">{{ 'Produk ' . $products->name }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <table class="table table-borderless">
                    <tr>
                        <th>ID</th>
                        <td>{{ $products->id }}</td>
                    </tr>
                    <tr>
                        <th>Nama Produk</th>
                        <td>{{ $products->name }}</td>
                    </tr>
                    <tr>
                        <th>Harga Produk</th>
                        <td>{{ number_format($products->price) }}</td>
                    </tr>
                    <tr>
                        <th>Stok Produk</th>
                        <td>{{ number_format($products->stock) }}</td>
                    </tr>
                    <tr>
                        <th>Dibuat Pada</th>
                        <td>{{ date('l, d F Y | H:i', strtotime($products->created_at)) }}</td>
                    </tr>
                    <tr>
                        <th>Terakhir Diubah Pada</th>
                        <td>{{ date('l, d F Y | H:i', strtotime($products->updated_at)) }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-6">
                <img src="{{ URL::asset('storage/products/' . $products->image) }}" alt="{{ $products->name }}"
                    class="img-fluid">
            </div>
        </div>

        <a href="{{ route('products_index') }}" class="btn btn-primary"><i class="bi bi-chevron-left"></i> Kembali</a>
    </div>
</div>
@endsection