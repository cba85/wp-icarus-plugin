<?php

use Icarus\Support\Facades\Config;
use Icarus\Support\Facades\Style;
use Icarus\Support\Facades\Script;

Style::setPath(Config::get('plugin')['styles'])
    ->add('wp-icarus-style', 'style.css', [], false, 'all')
    ->save('wp_enqueue_scripts');

Style::setPath(Config::get('plugin')['styles'])
    ->add('wp-icarus-admin', 'admin.css', [], false, 'all')
    ->save('admin_enqueue_scripts');

Script::setPath(Config::get('plugin')['scripts'])
    ->add('wp-icarus-scripts', 'scripts.js', [], false, 'all')
    ->save('wp_enqueue_scripts');

Script::setPath(Config::get('plugin')['scripts'])
    ->add('wp-icarus-admin', 'admin.js', [], false, 'all')
    ->save('admin_enqueue_scripts');
