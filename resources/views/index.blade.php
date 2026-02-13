<?php
@extends('layouts.app')
@section('content')
    <h1>Produits</h1>
    <a href="{{ route('$product.create') }}">Add a Product</a>
    @foreach($products as $product)
        <div>
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} €</p>
            <a href="{{ route('$product.edit', $product)}}">Edit</a>
            <form method="POST" action="{{route('$product.destroy', $product) }}">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        </div>
    @endforeach
@endsection
