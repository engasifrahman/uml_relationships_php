<?php

use Uml\Dependency\Basic\Report;
use Uml\Dependency\Basic\PDFExporter;

require_once __DIR__ . '/../vendor/autoload.php';

// 🚀 Usage Example
echo "=== Report Dependency Demo ===\n\n";

$report = new Report("Quarterly Sales", "Sales data for Q1 2024...");

echo "--- Generating Report ---\n";
$reportContent = $report->generate();
echo $reportContent . "\n";

echo "--- Exporting to PDF ---\n";
$report->exportToPDF(new PDFExporter(), "sales_report.pdf");

echo "--- Creating Summary ---\n";
$summary = $report->createSummary();
echo $summary . "\n";

echo "\n=== End of Demo ===\n";

// 🎯 Key Observation: 
// - Report TEMPORARILY uses DateFormatter, PDFExporter, SummaryCalculator
// - No long-term relationships are maintained
// - Each usage is confined to method scope