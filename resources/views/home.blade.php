@extends('base.base')
@section('content')
    <h1>Home Page</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">{{ $product_category->name }}</div>
                    <div class="card-text">{{ $product_category->description }}</div>
                    <div class="card-text">Total products: {{ $product_category->products->count() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection