<?php
// filepath: /resources/views/products/index.blade.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        @foreach ($gadgets as $gadget)
            <li>{{ $gadget['name'] }} - {{ $gadget['brand'] }} - ${{ $gadget['price'] }}</li>
        @endforeach
    </ul>
</body>
</html>
