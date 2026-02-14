@extends('layouts.app')

@section('title', 'Product Detail')

@section('content')
    <div class="card">
        <div class="card-header">
            Product Details
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <h3 class="text-primary">{{ $product->price }} DH</h3>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
