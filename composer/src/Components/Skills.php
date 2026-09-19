<?php

namespace Ababil\Ababil\Components;

use Ababil\Ababil\Data;
use Ababil\Ababil\Utils\Colors;

class Skills
{
    public static function render(): string
    {
        $data = Data::get();
        $skills = $data['skills'];

        $output = "\n" . Colors::bold("🚀 Skills Overview") . "\n\n";
        $output .= "  + " . Colors::cyan("Frontend") . "         " . Colors::bold(":") . "  " . implode(", ", $skills['frontend']) . "\n";
        $output .= "  + " . Colors::green("Backend") . "          " . Colors::bold(":") . "  " . implode(", ", $skills['backend']) . "\n";
        $output .= "  + " . Colors::greenBright("Database") . "         " . Colors::bold(":") . "  " . implode(", ", $skills['database']) . "\n";
        $output .= "  + " . Colors::cyanBright("Languages") . "        " . Colors::bold(":") . "  " . implode(", ", $skills['language']) . "\n";
        $output .= "  + " . Colors::cyan("Tools") . "            " . Colors::bold(":") . "  " . implode(", ", $skills['tools']) . "\n";

        return $output;
    }
}
