<?php

namespace Uml\Dependency\Basic;

use DateTime;

// 📊 Supplier Class
class DateFormatter {
    public static function format(DateTime $date, string $format = 'Y-m-d H:i:s'): string {
        return $date->format($format);
    }
    
    public static function parse(string $dateString): DateTime {
        return new DateTime($dateString);
    }
}