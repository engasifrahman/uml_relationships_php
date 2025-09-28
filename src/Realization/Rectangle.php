<?php

namespace Uml\Realization;

// 🟦 Rectangle IMPLEMENTS IDrawable
class Rectangle implements IDrawable {
    private float $width;
    private float $height;
    
    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function draw(): void {
        echo "Drawing rectangle: {$this->width}x{$this->height}\n";
    }
    
    public function getArea(): float {
        return $this->width * $this->height;
    }
}