<?php

namespace Uml\Aggregation\Advanced;

// 🛒 E-Commerce Aggregation Example
class ShoppingCart {
    private string $cartId;
    private array $products;
    
    public function __construct(string $cartId) {
        $this->cartId = $cartId;
        $this->products = [];
        echo "Shopping Cart '{$this->cartId}' created\n";
    }
    
    // 🎯 Aggregation: Products exist independently and can be in multiple carts
    public function addProduct(Product $product, int $quantity = 1): void {
        $this->products[] = [
            'product' => $product,
            'quantity' => $quantity
        ];
        echo "Added {$quantity} x '{$product->getName()}' to cart\n";
    }
    
    public function removeProduct(Product $product): void {
        foreach ($this->products as $key => $item) {
            if ($item['product'] === $product) {
                unset($this->products[$key]);
                echo "Removed '{$product->getName()}' from cart\n";
                return;
            }
        }
    }
    
    // 🎯 ADDED MISSING METHOD
    public function getProducts(): array {
        return $this->products;
    }
    
    public function getCartInfo(): array {
        $info = [
            'cartId' => $this->cartId,
            'totalItems' => count($this->products),
            'items' => []
        ];
        
        foreach ($this->products as $item) {
            $info['items'][] = [
                'product' => $item['product']->getName(),
                'quantity' => $item['quantity'],
                'price' => $item['product']->getPrice()
            ];
        }
        
        return $info;
    }
    
    public function checkout(): void {
        echo "Checking out cart '{$this->cartId}' with " . count($this->products) . " items\n";
        $total = 0;
        foreach ($this->products as $item) {
            $product = $item['product'];
            $quantity = $item['quantity'];
            $subtotal = $product->getPrice() * $quantity;
            $total += $subtotal;
            echo " - {$quantity} x {$product->getName()}: \${$subtotal}\n";
        }
        echo "Total: \${$total}\n";
        
        // 🛒 After checkout, cart is empty but products continue to exist
        $this->products = [];
    }
    
    public function abandonCart(): void {
        echo "Abandoning cart '{$this->cartId}' - products remain available\n";
        $this->products = [];
    }
}