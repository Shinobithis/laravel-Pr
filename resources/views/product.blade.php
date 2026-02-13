@extends('layouts.app')
@section('title', $product['name'])
@section('content')
    <div>
        <h3>{{$product['name']}}</h3>
        <p>{{$product['price']}}</p>
        <a href="/products">Back to Products</a>
    </div>
@endsection
