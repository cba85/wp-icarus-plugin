<?php

namespace Icarus\Plugin\Controllers;

class WordpressController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->loadAssets();
    }

    public function loadAssets()
    {
        $this->style->add('wp-icarus-style', 'style.css', [], false, 'all')
            ->save('wp_enqueue_scripts');

        $this->script->add('wp-icarus-scripts', 'scripts.js', [], false, 'all')
            ->save('wp_enqueue_scripts');
    }
}
