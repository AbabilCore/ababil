<?php

namespace Ababil\Ababil\Components;

use Ababil\Ababil\Data;
use Ababil\Ababil\Utils\Colors;
use Ababil\Ababil\Utils\Box;

class Header
{
    public static function render(): string
    {
        $data = Data::get();
        $name = $data['about']['name'];
        $profession = $data['about']['profession'];

        $content = "=============================================\n";
        $content .= "👋 Hi, I'm {$name}\n";
        $content .= "💻 {$profession}\n";
        $content .= "=============================================";

        return Colors::gradient(Box::create($content, 80, '═', '║')) . "\n";
    }
}
