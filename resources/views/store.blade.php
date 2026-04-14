@extends('base.base')
@section('content')
    <h1>Store Page</h1>
    {{-- @foreach ($product_categories as $pc)
        <h2>{{ $pc->name }}</h2>
        <p>{{ $pc->description }}</p>
    @endforeach --}}
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($products as $product)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->product_category->name }}</p>
                        <p class="card-text">Rp {{ number_format($product->price, 0, ',') }}</p>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection