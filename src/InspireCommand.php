<?php

namespace Usmanahmedmalik\InspiringQuran;

use Illuminate\Console\Command;

class InspireCommand extends Command
{
    protected $signature = 'inspire:quran {--locale=en : The locale for translation}';

    protected $description = 'Display a random inspiring Quranic Ayat';

    public function handle(): int
    {
        $locale = $this->option('locale') ?? 'en';
        $ayat = InspiringQuran::quote($locale);

        $translation = $ayat['translations'][$locale] ?? $ayat['translations']['en'] ?? 'Translation not available';
        $reference = sprintf('%s (%s)', $ayat['reference']['surah'], $ayat['reference']['ayah']);

        $this->line('');
        $this->line('  <fg=cyan>┌─────────────────────────────────────────────────────────────────────┐</>');
        
        $arabicLines = $this->wrapText($ayat['arabic'], 65);
        foreach ($arabicLines as $line) {
            $this->line(sprintf('  <fg=cyan>│</> <fg=white;options=bold>%-65s</> <fg=cyan>│</>', $line));
        }
        
        $this->line('  <fg=cyan>│</>                                                                   <fg=cyan>│</>');
        
        $translationLines = $this->wrapText($translation, 65);
        foreach ($translationLines as $line) {
            $this->line(sprintf('  <fg=cyan>│</> <fg=green>%-65s</> <fg=cyan>│</>', $line));
        }
        
        $this->line('  <fg=cyan>│</>                                                                   <fg=cyan>│</>');
        $this->line(sprintf('  <fg=cyan>│</> <fg=gray>— %-63s</> <fg=cyan>│</>', $reference));
        $this->line('  <fg=cyan>└─────────────────────────────────────────────────────────────────────┘</>');
        $this->line('');

        return self::SUCCESS;
    }

    private function wrapText(string $text, int $width): array
    {
        $text = trim($text);
        
        if (mb_strlen($text) <= $width) {
            return [$text];
        }

        $lines = [];
        $words = explode(' ', $text);
        $currentLine = '';

        foreach ($words as $word) {
            $testLine = $currentLine === '' ? $word : $currentLine . ' ' . $word;
            
            if (mb_strlen($testLine) <= $width) {
                $currentLine = $testLine;
            } else {
                if ($currentLine !== '') {
                    $lines[] = $currentLine;
                }
                $currentLine = $word;
            }
        }

        if ($currentLine !== '') {
            $lines[] = $currentLine;
        }

        return $lines;
    }
}
