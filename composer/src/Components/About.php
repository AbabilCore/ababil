<?php

namespace Ababil\Ababil\Components;

use Ababil\Ababil\Data;
use Ababil\Ababil\Utils\Colors;

class About
{
    public static function render(): string
    {
        $data = Data::get();
        $about = $data['about'];
        $contact = $data['contact'];

        $output = Colors::bold("👤 About Me") . "\n\n";
        $output .= "  ~/ " . Colors::bold("Name") . "            " . Colors::bold(":") . "  {$about['name']}\n";
        $output .= "  ~/ " . Colors::bold("Profession") . "      " . Colors::bold(":") . "  {$about['profession']}\n";
        $output .= "  ~/ " . Colors::bold("Gmail") . "           " . Colors::bold(":") . "  " . Colors::blueUnderline($contact['gmail']) . "\n\n";
        $output .= "  ~/ " . Colors::bold("Location") . "        " . Colors::bold(":") . "  {$about['address']}\n";
        $output .= "  ~/ " . Colors::bold("WhatsApp") . "        " . Colors::bold(":") . "  " . Colors::cyan($contact['whatsapp']) . "\n";
        $output .= "  ~/ " . Colors::bold("Website") . "         " . Colors::bold(":") . "  " . Colors::blueUnderline($contact['website']) . "\n";
        $output .= "  ~/ " . Colors::bold("GitHub") . "          " . Colors::bold(":") . "  " . Colors::blueUnderline($contact['github']) . "\n";
        $output .= "  ~/ " . Colors::bold("X (Twitter)") . "     " . Colors::bold(":") . "  " . Colors::blueUnderline($contact['x']) . "\n";
        $output .= "  ~/ " . Colors::bold("Discord") . "         " . Colors::bold(":") . "  " . Colors::blueUnderline($contact['discord']) . "\n";
        $output .= "  ~/ " . Colors::bold("Facebook") . "        " . Colors::bold(":") . "  " . Colors::blueUnderline($contact['facebook']) . "\n";

        return $output;
    }
}
