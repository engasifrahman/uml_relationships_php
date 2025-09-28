<?php

namespace Uml\Aggregation\Basic;

// 🏛️ Whole Class
class University {
    private string $name;
    private array $departments;
    
    public function __construct(string $name) {
        $this->name = $name;
        $this->departments = []; // Start with empty departments
        echo "University '{$this->name}' created\n";
    }
    
    // 🎯 Aggregation: Departments are ADDED to University (not created by)
    public function addDepartment(Department $department): void {
        $this->departments[] = $department;
        echo "Department '{$department->getName()}' added to {$this->name}\n";
    }
    
    public function removeDepartment(Department $department): void {
        $key = array_search($department, $this->departments, true);
        if ($key !== false) {
            unset($this->departments[$key]);
            echo "Department '{$department->getName()}' removed from {$this->name}\n";
        }
    }
    
    public function closeUniversity(): void {
        // 🎓 When university closes, departments CONTINUE TO EXIST
        echo "University '{$this->name}' closing...\n";
        foreach ($this->departments as $department) {
            echo " - Department '{$department->getName()}' continues to exist\n";
        }
        $this->departments = [];
    }
    
    public function getDepartments(): array {
        return $this->departments;
    }
    
    public function getName(): string {
        return $this->name;
    }
}