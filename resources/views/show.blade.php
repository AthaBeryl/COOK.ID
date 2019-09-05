@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
            <div class="form-group">
                <strong>Kategori:</strong>
                {{ $product->kategori }}
            </div>
            <div class="form-group">
                <strong>Stok:</strong>
                {{ $product->stok }}
            </div>
            <div class="form-group">
                <strong>Harga:</strong>
                {{ $product->harga }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <img src="{{asset('image/'.$product->gambar)}}" alt="" style="width: 400px; height: 500px; object-fit: cover">
        </div>
    </div>
@endsection
