<?php

namespace Uml\Aggregation\Basic;

// 🎓 Part Class
class Department {
    private string $name;
    private string $head;
    
    public function __construct(string $name, string $head) {
        $this->name = $name;
        $this->head = $head;
        echo "Department '{$this->name}' created (Head: {$this->head})\n";
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getHead(): string {
        return $this->head;
    }
    
    public function changeHead(string $newHead): void {
        $this->head = $newHead;
        echo "Department '{$this->name}' now headed by {$this->head}\n";
    }
}