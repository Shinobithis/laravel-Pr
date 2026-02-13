<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function contact() {
        return view('contact');
    }

    public function products() {
        $products = [
            ['id' => 1, 'name' => 'Acer V15 Laptop', 'price' => '10000 DH'],
            ['id' => 2, 'name' => 'Google Pixel 9 Pro', 'price' => '5000 DH'],
            ['id' => 3, 'name' => 'Google Pixel 10 pro', 'price' => '8000 DH']
        ];
        return view('products', compact('products'));
    }

    public function product($id) {
        $products = [
            ['id' => 1, 'name' => 'Acer V15 Laptop', 'price' => '10000 DH'],
            ['id' => 2, 'name' => 'Google Pixel 9 Pro', 'price' => '5000 DH'],
            ['id' => 3, 'name' => 'Google Pixel 10 pro', 'price' => '8000 DH']
        ];

        $product = collect($products)->firstWhere('id', $id);

        if (!$product) {
            abort(404);
        }
        return view('product', compact('product'));
    }
}
