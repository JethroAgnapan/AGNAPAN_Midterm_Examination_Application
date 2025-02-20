<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $gadgets = [
            ['name' => 'iPhone', 'brand' => 'Apple', 'price' => 999],
            ['name' => 'Galaxy S21', 'brand' => 'Samsung', 'price' => 799],
            ['name' => 'Surface Pro', 'brand' => 'Microsoft', 'price' => 899],
            ['name' => 'Pixel 6', 'brand' => 'Google', 'price' => 599],
        ];

        return view('products.index', ['gadgets' => $gadgets]);
    }
}
