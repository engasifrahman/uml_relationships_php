<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Uml\Association\Course;
use Uml\Association\Student;
use Uml\Association\Professor;

// 🚀 Usage
$profSmith = new Professor("Dr. Smith");
$math101 = new Course("Calculus", "MATH101");
$physics201 = new Course("Physics", "PHYS201");

$studentJohn = new Student("S123", "John Doe");
$studentJane = new Student("S124", "Jane Smith");

// 🔗 Creating associations
$profSmith->assignToCourse($math101);
$profSmith->assignToCourse($physics201);

$math101->enrollStudent($studentJohn);
$physics201->enrollStudent($studentJohn);
$physics201->enrollStudent($studentJane);

// 🔍 Navigating associations
echo "Professor: " . $profSmith->getName() . "\n";
echo "Teaches courses:\n";
foreach ($profSmith->getCourses() as $course) {
    echo " - " . $course->getTitle() . "\n";
}

echo "\nStudent: " . $studentJohn->getName() . "\n";
echo "Enrolled in:\n";
foreach ($studentJohn->getCourses() as $course) {
    echo " - " . $course->getTitle() . "\n";
    echo "   Professor: " . $course->getProfessor()->getName() . "\n";
}