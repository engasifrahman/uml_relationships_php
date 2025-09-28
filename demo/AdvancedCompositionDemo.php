<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Uml\Composition\Advanced\Email;

echo "=== Email Composition Demo ===\n\n";

$email = new Email("Project Report", "Here is the quarterly report...");

// Add attachments (composition - created by email)
$email->addAttachment("report.pdf", "PDF content...");
$email->addAttachment("data.xlsx", "Excel data...");

echo "\n--- Sending Email ---\n";
$email->send();

echo "\n--- Deleting Email ---\n";
$email->delete();
// All attachments are automatically destroyed

echo "\n=== End of Demo ===\n";