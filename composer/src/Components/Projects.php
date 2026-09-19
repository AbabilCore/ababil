<?php

namespace Ababil\Ababil\Components;

use Ababil\Ababil\Data;
use Ababil\Ababil\Utils\Colors;

class Projects
{
    public static function render(): string
    {
        $data = Data::get();
        $projects = $data['projects'];

        $output = "\n" . Colors::greenBright(Colors::bold("🌐 Featured Projects:")) . "\n\n";

        foreach ($projects as $project) {
            $output .= Colors::green("•") . " " . Colors::bold($project['label']) . "\n";
            $output .= "  → " . Colors::gray($project['description']) . "\n";
            $output .= "  Source: " . Colors::blueUnderline($project['source']) . "\n\n";
        }

        return $output;
    }
}
