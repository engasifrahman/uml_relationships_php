<?php

namespace Uml\Inheritance;

// 🏛️ Parent Class
class Animal {
    protected string $name;
    
    public function __construct(string $name) {
        $this->name = $name;
    }
    
    public function speak(): string {
        return "Some sound\n";
    }
}
