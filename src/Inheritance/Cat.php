<?php

namespace Uml\Inheritance;

// 🐱 Child Class - Cat IS-A Animal  
class Cat extends Animal {
    public function speak(): string {
        return "Meow!\n";
    }
}