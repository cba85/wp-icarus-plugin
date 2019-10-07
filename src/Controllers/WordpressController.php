<?php

namespace Icarus\Plugin\Controllers;

use Icarus\Support\Facades\Config;
use Icarus\Support\Facades\Style;
use Icarus\Support\Facades\Script;

class WordpressController
{
    public function __construct()
    {
        $this->loadAssets();
    }

    public function loadAssets()
    {
        Style::setPath(Config::get('plugin')['styles'])
            ->add('wp-icarus-style', 'style.css', [], false, 'all')
            ->save('wp_enqueue_scripts');

        Script::setPath(Config::get('plugin')['scripts'])
            ->add('wp-icarus-scripts', 'scripts.js', [], false, 'all')
            ->save('wp_enqueue_scripts');
    }
}
