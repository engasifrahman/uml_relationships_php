<?php

namespace Uml\Composition\Basic;

// 🚪 Part Class
class Room {
    private string $type;
    private float $area;
    
    public function __construct(string $type, float $area) {
        $this->type = $type;
        $this->area = $area;
        echo "Room '{$this->type}' created with area {$this->area}m²\n";
    }
    
    public function getInfo(): string {
        return "{$this->type} ({$this->area}m²)";
    }
    
    // Destructor to demonstrate lifecycle
    public function __destruct() {
        echo "Room '{$this->type}' destroyed\n";
    }
}