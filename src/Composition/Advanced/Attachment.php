<?php

namespace Uml\Composition\Advanced;

class Attachment {
    private string $filename;
    private string $content;
    private Email $email; // Reference back to owner
    
    public function __construct(string $filename, string $content, Email $email) {
        $this->filename = $filename;
        $this->content = $content;
        $this->email = $email; // Attachment knows its owner
        
        echo "Attachment '{$this->filename}' created for email '{$email->getSubject()}'\n";
    }
    
    public function getFilename(): string {
        return $this->filename;
    }
    
    public function getContent(): string {
        return $this->content;
    }
    
    public function __destruct() {
        echo "Attachment '{$this->filename}' destroyed\n";
    }
}