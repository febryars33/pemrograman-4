@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="card card-outline card-primary mt-3">
    <div class="card-header">
        <h3 class="card-title">Buat Data Produk Baru</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('products_store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Harga Produk</label>
                <div class="col-sm-10">
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                        id="price">
                    @error('price')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="stock" class="col-sm-2 col-form-label">Stok Produk</label>
                <div class="col-sm-10">
                    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror"
                        id="stock">
                    @error('stock')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label">Foto Produk</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" name="image"
                            class="custom-file-input @error('image') is-invalid @enderror"" id=" image">
                        <label class="custom-file-label" for="image">Choose file</label>
                        @error('image')
                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection