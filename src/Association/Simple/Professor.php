<?php

namespace Uml\Association\Simple;

class Professor {
    private string $name;
    private array $courses = [];
    
    public function __construct(string $name) {
        $this->name = $name;
    }
    
    public function assignToCourse(Course $course): void {
        $this->courses[] = $course;
        $course->setProfessor($this); // Bidirectional association
    }
    
    public function getCourses(): array {
        return $this->courses;
    }
    
    public function getName(): string {
        return $this->name;
    }
}