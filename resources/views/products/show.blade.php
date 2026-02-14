@extends('layouts.app')

@section('title', 'Product Detail')

@section('content')
    <div class="card">
        <div class="card-header">
            Product Details
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded" alt="{{ $product->name }}">
                    @else
                        <img src="https://via.placeholder.com/300x200?text=No+Image" class="img-fluid rounded" alt="No Image">
                    @endif
                </div>
                <div class="col-md-8">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <h3 class="text-primary">{{ $product->price }} DH</h3>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to List</a>
                </div>
            </div>
        </div>
    </div>
@endsection
