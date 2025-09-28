<?php

namespace Uml\Composition\Basic;

// 🏠 Whole Class
class House {
    private string $address;
    private array $rooms;
    
    public function __construct(string $address) {
        $this->address = $address;
        // 🏗️ Rooms are CREATED with the House (composition)
        $this->rooms = [
            new Room("Living Room", 25.5),
            new Room("Bedroom", 15.0),
            new Room("Kitchen", 12.5)
        ];
        echo "House at {$this->address} created with " . count($this->rooms) . " rooms\n";
    }
    
    public function demolish(): void {
        // 🧨 When house is demolished, all rooms are destroyed
        $this->rooms = [];
        echo "House demolished - all rooms are destroyed\n";
    }
    
    public function getRooms(): array {
        return $this->rooms;
    }
    
    public function getAddress(): string {
        return $this->address;
    }
}