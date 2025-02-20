<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $gadgets = [
            ['name' => 'Smartphone', 'brand' => 'Brand A', 'price' => 699],
            ['name' => 'Laptop', 'brand' => 'Brand B', 'price' => 999],
            ['name' => 'Tablet', 'brand' => 'Brand C', 'price' => 499],
            ['name' => 'Smartwatch', 'brand' => 'Brand D', 'price' => 199],
        ];

        return view('index', ['gadgets' => $gadgets]);
    }
}
