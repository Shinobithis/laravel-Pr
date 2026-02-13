@extends('layouts.app')
@section('title', 'Products')
@section('content')
    <h1>Our Products</h1>
    @foreach($products as $product)
        <div>
            <h3>{{$product['name']}}</h3>
            <p>{{$product['price']}}</p>
            <a href="/products/{{ $product['id'] }}">Details</a>
        </div>
    @endforeach
@endsection
