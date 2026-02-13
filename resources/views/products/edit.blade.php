@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <h1>Edit Product</h1>

    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Name:</label><br>
            <input type="text" name="name" value="{{ $product->name }}" required>
        </div>

        <div>
            <label>Description:</label><br>
            <textarea name="description" required>{{ $product->description }}</textarea>
        </div>

        <div>
            <label>Price:</label><br>
            <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
        </div>

        <br>
        <button type="submit">Update Product</button>
    </form>
@endsection
