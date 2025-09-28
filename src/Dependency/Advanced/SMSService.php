<?php

namespace Uml\Dependency\Advanced;

class SMSService {
    public function sendSMS(string $phone, string $message): bool {
        echo "📱 SMS sent to: {$phone}\n";
        echo "Message: {$message}\n";
        return true;
    }
}