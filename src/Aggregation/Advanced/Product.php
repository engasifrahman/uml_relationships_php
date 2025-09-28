<?php

namespace Uml\Aggregation\Advanced;

class Product {
    private string $name;
    private float $price;
    private int $stock;
    
    public function __construct(string $name, float $price, int $stock) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        echo "Product '{$this->name}' created (\${$price}, Stock: {$stock})\n";
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getPrice(): float {
        return $this->price;
    }
    
    public function getStock(): int {
        return $this->stock;
    }
    
    public function updateStock(int $newStock): void {
        $this->stock = $newStock;
        echo "Product '{$this->name}' stock updated to {$this->stock}\n";
    }
}