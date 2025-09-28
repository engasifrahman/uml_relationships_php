<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Uml\Aggregation\Basic\Department;
use Uml\Aggregation\Basic\University;  

// 🚀 Usage Example
echo "=== University Aggregation Demo ===\n\n";

// Departments exist independently first
$mathDept = new Department("Mathematics", "Dr. Smith");
$physicsDept = new Department("Physics", "Dr. Johnson");
$chemistryDept = new Department("Chemistry", "Dr. Brown");

echo "\n--- Creating Universities ---\n";
$stateUni = new University("State University");
$techUni = new University("Tech Institute");

echo "\n--- Adding Departments to Universities ---\n";
// 🎯 Aggregation: Departments can be added to universities
$stateUni->addDepartment($mathDept);
$stateUni->addDepartment($physicsDept);
$stateUni->addDepartment($chemistryDept);

$techUni->addDepartment($physicsDept); // Same department in multiple universities!
$techUni->addDepartment($chemistryDept);

echo "\n--- Department Independence ---\n";
// Departments can change independently
$mathDept->changeHead("Dr. Wilson");

echo "\n--- University Operations ---\n";
echo "State University departments:\n";
foreach ($stateUni->getDepartments() as $dept) {
    echo " - " . $dept->getName() . " (Head: " . $dept->getHead() . ")\n";
}

echo "\nTech Institute departments:\n";
foreach ($techUni->getDepartments() as $dept) {
    echo " - " . $dept->getName() . " (Head: " . $dept->getHead() . ")\n";
}

echo "\n--- Closing University ---\n";
$stateUni->closeUniversity();
// Notice: All departments continue to exist independently

echo "\n--- Departments still accessible ---\n";
echo "Physics department head: " . $physicsDept->getHead() . "\n";
echo "Chemistry department head: " . $chemistryDept->getHead() . "\n";

echo "\n=== End of Demo ===\n";