<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Uml\Composition\Basic\House;


// 🚀 Usage Example
echo "=== House Composition Demo ===\n\n";

// Creating a house automatically creates rooms
$house = new House("123 Main Street");

echo "\n--- House Details ---\n";
echo "Address: " . $house->getAddress() . "\n";
echo "Rooms:\n";
foreach ($house->getRooms() as $room) {
    echo " - " . $room->getInfo() . "\n";
}

echo "\n--- Demolishing House ---\n";
$house->demolish();
// Notice: All rooms are automatically destroyed with the house

echo "\n=== End of Demo ===\n";