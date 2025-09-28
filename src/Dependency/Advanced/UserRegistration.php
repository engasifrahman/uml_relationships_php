<?php

namespace Uml\Dependency\Advanced;

class UserRegistration {
    private string $username;
    private string $email;
    private string $phone;
    
    public function __construct(string $username, string $email, string $phone) {
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
    }
    
    // 🎯 MULTIPLE DEPENDENCIES in one method
    public function register(): bool {
        // 📦 Dependency: Logger (static call)
        Logger::log("Starting registration for user: {$this->username}");
        
        // Simulate user creation in database
        echo "👤 User '{$this->username}' created in database\n";
        
        // 📦 Dependency: EmailService (local variable)
        $emailService = new EmailService();
        $emailSent = $emailService->send(
            $this->email,
            "Welcome to Our Service",
            "Hello {$this->username}, welcome to our platform!"
        );
        
        // 📦 Dependency: SMSService (local variable)
        $smsService = new SMSService();
        $smsSent = $smsService->sendSMS(
            $this->phone,
            "Welcome {$this->username}! Your account is ready."
        );
        
        // 📦 Dependency: Logger (static call)
        if ($emailSent && $smsSent) {
            Logger::log("Registration completed successfully for: {$this->username}");
        } else {
            Logger::log("Registration had notification issues for: {$this->username}", "WARN");
        }
        
        return true;
    }
    
    // 🎯 DEPENDENCY: Method with parameter dependencies
    public function sendCustomNotification(
        EmailService $emailService, 
        SMSService $smsService, 
        string $message
    ): void {
        // Temporary usage of dependencies passed as parameters
        $emailService->send($this->email, "Notification", $message);
        $smsService->sendSMS($this->phone, $message);
        
        Logger::log("Custom notification sent to: {$this->username}");
    }
}