<?php

namespace Ababil\Ababil\Utils;

class Box
{
    private static function getDisplayWidth(string $text): int
    {
        // Remove ANSI color codes
        $cleanText = preg_replace('/\033\[[0-9;]*m/', '', $text);
        
        // Count emojis and other wide characters
        $emojiCount = preg_match_all('/[\x{1F300}-\x{1F9FF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}\x{1F100}-\x{1F1FF}\x{1F200}-\x{1F2FF}\x{1F680}-\x{1F6FF}\x{1F900}-\x{1F9FF}]/u', $cleanText);
        
        // Base length + extra width for emojis (emojis take 2 display chars but count as 1)
        return mb_strlen($cleanText) + $emojiCount;
    }

    public static function create(
        string $content, 
        int $width = 82, 
        string $horizontal = '─', 
        string $vertical = '│'
    ): string {
        $lines = explode("\n", $content);
        $paddedLines = [];
        
        $topLeft = ($horizontal === '═') ? '╓' : '┌';
        $topRight = ($horizontal === '═') ? '╖' : '┐';
        $bottomLeft = ($horizontal === '═') ? '╙' : '└';
        $bottomRight = ($horizontal === '═') ? '╝' : '┘';
        
 
        $box = $topLeft . str_repeat($horizontal, $width) . $topRight . "\n";
        
        foreach ($lines as $line) {
            $displayWidth = self::getDisplayWidth($line);
            $padding = $width - $displayWidth;
            $leftPad = (int) floor($padding / 2);
            $rightPad = $padding - $leftPad;
            
            $box .= $vertical . str_repeat(' ', $leftPad) . $line . str_repeat(' ', $rightPad) . $vertical . "\n";
        }
        
        $box .= $bottomLeft . str_repeat($horizontal, $width) . $bottomRight;
        
        return $box;
    }

    public static function outer(
        string $content,
        int $width = 87,
        string $title = 'AbabilCore CLI README'
    ): string {
        $lines = explode("\n", trim($content));
        
        $titleLen = mb_strlen($title);
        $leftDash = (int) floor(($width - $titleLen - 2) / 2);
        $rightDash = $width - $titleLen - 2 - $leftDash;
        
        $box = "╭" . str_repeat('─', $leftDash) . " {$title} " . str_repeat('─', $rightDash) . "╮\n";
        
        foreach ($lines as $line) {
            $displayWidth = self::getDisplayWidth($line);
            $padding = $width - $displayWidth;
            
            $box .= "│ " . $line . str_repeat(' ', max(0, $padding - 2)) . " │\n";
        }
        
        $box .= "╰" . str_repeat('─', $width) . "╯";
        
        return $box;
    }
}
