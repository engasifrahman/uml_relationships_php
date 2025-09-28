<?php

namespace Uml\Dependency\Advanced;

// 🎯 Advanced Example: Notification System with Dependencies
class EmailService {
    public function send(string $to, string $subject, string $body): bool {
        echo "📧 Email sent to: {$to}\n";
        echo "Subject: {$subject}\n";
        echo "Body: {$body}\n";
        return true;
    }
}
