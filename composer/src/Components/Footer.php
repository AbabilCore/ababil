<?php

namespace Ababil\Ababil\Components;

use Ababil\Ababil\Data;
use Ababil\Ababil\Utils\Colors;
use Ababil\Ababil\Utils\Box;

class Footer
{
    public static function render(): string
    {
        $data = Data::get();
        $timestamp = $data['timestamp'];
        $version = $data['version'];

        $content = "💬 Thanks for visiting my CLI portfolio!\n";
        $content .= "Created : {$timestamp['createdAt']}\n";
        $content .= "Updated : {$timestamp['updatedAt']}\n";
        $content .= "Version : ababil@{$version}";

        return Colors::gradient(Box::create($content, 80)) . "\n";
    }
}
