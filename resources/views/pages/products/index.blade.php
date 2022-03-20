@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="card card-outline card-primary mt-3">
    <div class="card-header">
        <h3 class="card-title">Data Produk</h3>
        <div class="card-tools">
            <a href="{{ route('products_create') }}" class="badge badge-primary"><i class="bi bi-plus"></i> Buat Data
                Baru</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Stok Barang</th>
                        <th>Foto Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $item->name }}</td>
                        <td class="align-middle">{{ 'Rp. ' . number_format($item->price) . ',-' }}</td>
                        <td class="align-middle">{{ $item->stock }}</td>
                        <td class="align-middle">
                            <img src="{{ URL::asset('storage/products/' . $item->image) }}" alt="{{ $item->name }}"
                                class="img-thumbnail" width="120px" height="120px">
                        </td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('products_show', $item->id) }}" class="btn btn-info"><i
                                        class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($products->isEmpty())
        <div class="alert alert-warning text-center"><i class="bi bi-exclamation-triangle"></i> Belum ada data.</div>
        @endif
    </div>
</div>

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
@endsection