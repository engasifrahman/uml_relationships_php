<?php

namespace Uml\Dependency\Advanced;

class Logger {
    public static function log(string $message, string $level = 'INFO'): void {
        $timestamp = date('Y-m-d H:i:s');
        echo "[{$timestamp}] {$level}: {$message}\n";
    }
}