<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Uml\Aggregation\Advanced\Product;
use Uml\Aggregation\Advanced\ShoppingCart;


// 🚀 Usage Example
echo "=== Shopping Cart Aggregation Demo ===\n\n";

// Products exist independently first
$laptop = new Product("Laptop", 999.99, 10);
$mouse = new Product("Wireless Mouse", 29.99, 50);
$keyboard = new Product("Mechanical Keyboard", 79.99, 25);

echo "\n--- Creating Shopping Carts ---\n";
$cart1 = new ShoppingCart("CART001");
$cart2 = new ShoppingCart("CART002");

echo "\n--- Adding Products to Carts ---\n";
// 🎯 Aggregation: Same products can be in multiple carts
$cart1->addProduct($laptop, 1);
$cart1->addProduct($mouse, 2);
$cart1->addProduct($keyboard, 1);

$cart2->addProduct($laptop, 1); // Same laptop in another cart!
$cart2->addProduct($mouse, 1);

echo "\n--- Product Independence ---\n";
// Products can be updated independently
$laptop->updateStock(8); // Stock updated for all carts

echo "\n--- Cart Operations ---\n";
echo "Cart 1 info:\n";
$cart1Info = $cart1->getCartInfo();
echo "Cart ID: " . $cart1Info['cartId'] . "\n";
echo "Total Items: " . $cart1Info['totalItems'] . "\n";
foreach ($cart1Info['items'] as $item) {
    echo " - {$item['quantity']} x {$item['product']} @ \${$item['price']}\n";
}

echo "\nCart 2 info:\n";
$cart2Info = $cart2->getCartInfo();
echo "Cart ID: " . $cart2Info['cartId'] . "\n";
echo "Total Items: " . $cart2Info['totalItems'] . "\n";
foreach ($cart2Info['items'] as $item) {
    echo " - {$item['quantity']} x {$item['product']} @ \${$item['price']}\n";
}

echo "\n--- Cart 1 Checkout ---\n";
$cart1->checkout();

echo "\n--- Cart 2 contents remain ---\n";
$cart2InfoAfter = $cart2->getCartInfo();
echo "Cart 2 still has: " . $cart2InfoAfter['totalItems'] . " items\n";

echo "\n--- Products still exist independently ---\n";
echo "Laptop stock: " . $laptop->getStock() . "\n";
echo "Mouse price: $" . $mouse->getPrice() . "\n";

echo "\n=== End of Demo ===\n";