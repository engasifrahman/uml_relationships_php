<?php

namespace Uml\Dependency\Basic;

class SummaryCalculator {
    public function calculate(string $data): string {
        $wordCount = str_word_count($data);
        $charCount = strlen($data);
        return "Summary: {$wordCount} words, {$charCount} characters";
    }
}