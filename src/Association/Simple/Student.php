<?php

namespace Uml\Association\Simple;

class Student {
    private string $name;
    private string $studentId;
    private array $courses = [];
    
    public function __construct(string $studentId, string $name) {
        $this->studentId = $studentId;
        $this->name = $name;
    }
    
    public function addCourse(Course $course): void {
        $this->courses[] = $course;
    }
    
    public function getCourses(): array {
        return $this->courses;
    }
    
    public function getName(): string {
        return $this->name;
    }
}