<?php
require_once "Products/Electronics.php";
require_once "Products/Laptop.php";
require_once "Products/Smartphone.php";

use Products\Laptop;
use Products\Smartphone;

// Membuat objek Laptop
$laptop = new Laptop("Dell", 1000, "Intel i7");
$laptop->setDiscount(100);
$laptopInfo = $laptop->getInfo();

// Membuat objek Smartphone
$smartphone = new Smartphone("Samsung", 800, 108);
$smartphone->setDiscount(50);
$smartphoneInfo = $smartphone->getInfo();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .product-info {
            margin: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 400px;
        }
        .product-info h2 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .product-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="product-info">
        <h2>Laptop</h2>
        <p><?php echo $laptopInfo; ?></p>
    </div>
    <div class="product-info">
        <h2>Smartphone</h2>
        <p><?php echo $smartphoneInfo; ?></p>
    </div>
</body>
</html>
