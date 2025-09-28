<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Uml\Realization\Circle;
use Uml\Realization\Rectangle;

// 🚀 Usage
$circle = new Circle(5.0);
$rectangle = new Rectangle(4.0, 6.0);

$circle->draw(); // 🎨 "Drawing circle with radius: 5"
echo "Area: " . $circle->getArea() . "\n";
$circle->resize(1.5); // 🔄 "Circle resized to radius: 7.5"

$rectangle->draw(); // 🎨 "Drawing rectangle: 4x6"
echo "Area: " . $rectangle->getArea() . "\n";

// 🎭 Polymorphism in action
$shapes = [$circle, $rectangle];
foreach ($shapes as $shape) {
    $shape->draw(); // Each calls its own draw method
}