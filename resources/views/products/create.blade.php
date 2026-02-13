@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
    <h1>Create a New Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <div>
            <label>Name:</label><br>
            <input type="text" name="name" placeholder="Product Name" required>
        </div>

        <div>
            <label>Description:</label><br>
            <textarea name="description" placeholder="Product Description" required></textarea>
        </div>

        <div>
            <label>Price:</label><br>
            <input type="number" step="0.01" name="price" placeholder="0.00" required>
        </div>

        <br>
        <button type="submit">Save Product</button>
    </form>
@endsection
