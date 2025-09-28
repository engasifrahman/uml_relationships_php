<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Uml\Dependency\Advanced\SMSService;
use Uml\Dependency\Advanced\EmailService;
use Uml\Dependency\Advanced\UserRegistration;

// 🚀 Usage Example
echo "=== User Registration Dependency Demo ===\n\n";

$user = new UserRegistration("john_doe", "john@example.com", "+1234567890");

echo "--- Registering User ---\n";
$user->register();

echo "\n--- Sending Custom Notification ---\n";
$user->sendCustomNotification(
    new EmailService(),
    new SMSService(),
    "Your premium subscription has been activated!"
);

echo "\n=== End of Demo ===\n";

// 🎯 Key Observations:
// - UserRegistration has NO permanent references to EmailService, SMSService, Logger
// - All dependencies are temporary and method-scoped
// - This promotes loose coupling and testability