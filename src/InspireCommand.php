<?php

namespace Usmanahmedmalik\InspiringQuran;

use Illuminate\Console\Command;

class InspireCommand extends Command
{
    protected $signature = 'inspire:quran 
                            {--locale=en : The locale for translation}
                            {--theme= : Get ayat from specific theme (hope, mercy, patience, etc.)}
                            {--list-themes : List all available themes}';

    protected $description = 'Display a random inspiring Quranic Ayat';

    public function handle(): int
    {
        if ($this->option('list-themes')) {
            return $this->listThemes();
        }

        $locale = $this->option('locale') ?? 'en';
        $theme = $this->option('theme');

        try {
            if ($theme) {
                $ayat = InspiringQuran::byTheme($theme, $locale);
                $themeLabel = ucfirst($theme);
            } else {
                $ayat = InspiringQuran::quote($locale);
                $themeLabel = null;
            }
        } catch (\InvalidArgumentException $e) {
            $this->error($e->getMessage());
            return self::FAILURE;
        }

        $translation = $ayat['translations'][$locale] ?? $ayat['translations']['en'] ?? 'Translation not available';
        $reference = sprintf('%s (%s)', $ayat['reference']['surah'], $ayat['reference']['ayah']);

        $this->line('');
        $this->line('  <fg=cyan>┌─────────────────────────────────────────────────────────────────────┐</>');
        
        if ($themeLabel) {
            $this->line(sprintf('  <fg=cyan>│</> <fg=magenta>Theme: %-59s</> <fg=cyan>│</>', $themeLabel));
            $this->line('  <fg=cyan>│</>                                                                   <fg=cyan>│</>');
        }
        
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

    private function listThemes(): int
    {
        $this->info('Available Themes:');
        $this->line('');

        $themesWithDescriptions = InspiringQuran::getThemesWithDescriptions();
        
        foreach ($themesWithDescriptions as $theme => $description) {
            $this->line(sprintf('  <fg=yellow>%-15s</> <fg=gray>%s</>', $theme, $description));
        }

        $this->line('');
        $this->info('Usage: php artisan inspire:quran --theme=hope');
        
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
