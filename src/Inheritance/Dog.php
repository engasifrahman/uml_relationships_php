<?php

namespace Uml\Inheritance;

// 🐶 Child Class - Dog IS-A Animal
class Dog extends Animal {
    public function speak(): string {
        return "Woof! Woof!\n";
    }
}