@extends('layouts.app')

@section('title', 'Products List')

@section('content')
    <h1>Products</h1>

    <a href="{{ route('products.create') }}" style="background-color: blue; color: white; padding: 5px 10px; text-decoration: none;">Create New Product</a>
    <hr>

    @if($products->count() > 0)
        @foreach($products as $product)
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p>Price: {{ $product->price }} $</p>

                <a href="{{ route('products.edit', $product) }}">Edit</a>

                <form method="POST" action="{{ route('products.destroy', $product) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color: red;">Delete</button>
                </form>
            </div>
        @endforeach
    @else
        <p>No products found.</p>
    @endif
@endsection
