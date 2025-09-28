<?php
namespace Uml\Association\Simple;

class Course {
    private string $code;
    private string $title;
    private array $students = [];
    private ?Professor $professor = null;
    
    public function __construct(string $title, string $code) {
        $this->title = $title;
        $this->code = $code;
    }
    
    public function setProfessor(Professor $professor): void {
        $this->professor = $professor;
    }
    
    public function enrollStudent(Student $student): void {
        $this->students[] = $student;
        $student->addCourse($this); // Bidirectional association
    }
    
    public function getProfessor(): ?Professor {
        return $this->professor;
    }
    
    public function getStudents(): array {
        return $this->students;
    }
    
    public function getTitle(): string {
        return $this->title;
    }
}