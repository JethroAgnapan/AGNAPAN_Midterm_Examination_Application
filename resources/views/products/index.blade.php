<?php
// filepath: /resources/views/index.blade.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #40E0D0;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            list-style-type: none;
            padding: 0;
        }
        .product-item {
            background-color: #1e1e1e;
            border: 1px solid #333;
            border-radius: 5px;
            margin: 10px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            width: 200px;
            text-align: center;
        }
        .product-item h2 {
            margin: 0 0 10px;
            color: #40E0D0;
        }
        .product-item p {
            margin: 5px 0;
            color: #b0bec5;
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