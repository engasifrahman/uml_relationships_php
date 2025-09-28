<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Uml\Inheritance\Cat;
use Uml\Inheritance\Dog;

// 🚀 Usage
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

echo $dog->speak(); // 🗣️ "Woof! Woof!"
echo $cat->speak(); // 🗣️ "Meow!"