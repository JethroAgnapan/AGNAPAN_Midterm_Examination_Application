<?php
// filepath: /resources/views/products/index.blade.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #343a40;
        }
        .product-list {
            list-style-type: none;
            padding: 0;
        }
        .product-item {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin: 10px 0;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .product-item h2 {
            margin: 0 0 10px;
            color: #007bff;
        }
        .product-item p {
            margin: 5px 0;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <h1>Products</h1>
    <ul class="product-list">
        @foreach ($gadgets as $gadget)
            <li class="product-item">
                <h2>{{ $gadget['name'] }}</h2>
                <p>Brand: {{ $gadget['brand'] }}</p>
                <p>Price: ${{ $gadget['price'] }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>