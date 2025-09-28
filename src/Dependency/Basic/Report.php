<?php

namespace Uml\Dependency\Basic;

use DateTime;

// 📄 Client Class
class Report {
    private string $title;
    private string $data;
    
    public function __construct(string $title, string $data) {
        $this->title = $title;
        $this->data = $data;
    }
    
    // 🎯 DEPENDENCY: Temporary usage of DateFormatter and PDFExporter
    public function generate(): string {
        // 📦 Dependency: Using DateFormatter as local variable
        $currentDate = new DateTime();
        $formattedDate = DateFormatter::format($currentDate);
        
        $reportContent = "Report: {$this->title}\n";
        $reportContent .= "Generated on: {$formattedDate}\n";
        $reportContent .= "Data: {$this->data}\n";
        
        return $reportContent;
    }
    
    // 🎯 DEPENDENCY: Method parameter dependency
    public function exportToPDF(PDFExporter $exporter, string $filename): void {
        $content = $this->generate();
        $exporter::export($content, $filename); // Temporary usage
    }
    
    // 🎯 DEPENDENCY: Local object creation
    public function createSummary(): string {
        $tempCalculator = new SummaryCalculator(); // Local dependency
        return $tempCalculator->calculate($this->data);
    }
}