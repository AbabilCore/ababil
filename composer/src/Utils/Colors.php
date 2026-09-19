<?php

namespace Ababil\Ababil\Utils;

class Colors
{
    private const RESET = "\033[0m";
    private const BOLD = "\033[1m";
    private const DIM = "\033[2m";
    private const UNDERLINE = "\033[4m";
 
    private const BLACK = "\033[30m";
    private const RED = "\033[31m";
    private const GREEN = "\033[32m";
    private const YELLOW = "\033[33m";
    private const BLUE = "\033[34m";
    private const MAGENTA = "\033[35m";
    private const CYAN = "\033[36m";
    private const WHITE = "\033[37m";
    private const GRAY = "\033[90m";

    private const BRIGHT_RED = "\033[91m";
    private const BRIGHT_GREEN = "\033[92m";
    private const BRIGHT_YELLOW = "\033[93m";
    private const BRIGHT_BLUE = "\033[94m";
    private const BRIGHT_MAGENTA = "\033[95m";
    private const BRIGHT_CYAN = "\033[96m";
    private const BRIGHT_WHITE = "\033[97m";

    public static function bold(string $text): string
    {
        return self::BOLD . $text . self::RESET;
    }

    public static function cyan(string $text): string
    {
        return self::CYAN . $text . self::RESET;
    }

    public static function cyanBright(string $text): string
    {
        return self::BRIGHT_CYAN . $text . self::RESET;
    }

    public static function green(string $text): string
    {
        return self::GREEN . $text . self::RESET;
    }

    public static function greenBright(string $text): string
    {
        return self::BRIGHT_GREEN . $text . self::RESET;
    }

    public static function blue(string $text): string
    {
        return self::BLUE . $text . self::RESET;
    }

    public static function blueUnderline(string $text): string
    {
        return self::BLUE . self::UNDERLINE . $text . self::RESET;
    }

    public static function gray(string $text): string
    {
        return self::GRAY . $text . self::RESET;
    }

    public static function gradient(string $text): string
    {
        $lines = explode("\n", $text);
        $colors = [
            self::MAGENTA,
            self::BRIGHT_MAGENTA,
            self::CYAN,
            self::BRIGHT_CYAN,
            self::BLUE,
        ];
        
        $output = '';
        foreach ($lines as $index => $line) {
            $colorIndex = $index % count($colors);
            $output .= $colors[$colorIndex] . $line . self::RESET . "\n";
        }
        
        return rtrim($output);
    }
}
