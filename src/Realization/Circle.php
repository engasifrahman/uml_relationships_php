<?php

namespace Uml\Realization;

// 🔵 Circle IMPLEMENTS IDrawable and IResizable
class Circle implements IDrawable, IResizable {
    private float $radius;
    
    public function __construct(float $radius) {
        $this->radius = $radius;
    }
    
    public function draw(): void {
        echo "Drawing circle with radius: {$this->radius}\n";
    }
    
    public function getArea(): float {
        return pi() * $this->radius * $this->radius;
    }
    
    public function resize(float $scale): void {
        $this->radius *= $scale;
        echo "Circle resized to radius: {$this->radius}\n";
    }
}