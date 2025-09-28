<?php

namespace Uml\Composition\Advanced;

// 📧 Advanced Example: Email with Attachments
class Email {
    private string $subject;
    private string $body;
    private array $attachments;
    
    public function __construct(string $subject, string $body) {
        $this->subject = $subject;
        $this->body = $body;
        $this->attachments = []; // Start with no attachments
        
        echo "Email '{$this->subject}' created\n";
    }
    
    // 🎯 Composition: Attachments are created by and belong to Email
    public function addAttachment(string $filename, string $content): void {
        $this->attachments[] = new Attachment($filename, $content, $this);
        echo "Attachment '{$filename}' added to email\n";
    }
    
    public function send(): void {
        echo "Sending email '{$this->subject}' with " . count($this->attachments) . " attachments\n";
        foreach ($this->attachments as $attachment) {
            echo " - Including: " . $attachment->getFilename() . "\n";
        }
    }
    
    public function delete(): void {
        // 🧨 When email is deleted, all attachments are deleted too
        $this->attachments = [];
        echo "Email deleted - all attachments destroyed\n";
    }
    
    public function getSubject(): string {
        return $this->subject;
    }
}