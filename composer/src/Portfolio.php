<?php

namespace Ababil\Ababil;

use Ababil\Ababil\Components\Header;
use Ababil\Ababil\Components\About;
use Ababil\Ababil\Components\Skills;
use Ababil\Ababil\Components\Projects;
use Ababil\Ababil\Components\Footer;
use Ababil\Ababil\Utils\Box;

class Portfolio
{
    public function display(): void
    {
        $content = Header::render() . "\n";
        $content .= About::render() . "\n";
        $content .= Skills::render() . "\n";
        $content .= Projects::render();
        $content .= Footer::render();

        echo Box::outer($content, 85, 'AbabilCore CLI README') . "\n";
    }
}
