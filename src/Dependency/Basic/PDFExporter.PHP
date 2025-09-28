<?php

namespace Uml\Dependency\Basic;

class PDFExporter {
    public static function export(string $content, string $filename): void {
        echo "Exporting to PDF: {$filename}\n";
        echo "Content: {$content}\n";
    }
}