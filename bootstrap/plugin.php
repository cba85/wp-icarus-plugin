<?php

use Icarus\Support\Facades\Config;
use Icarus\Support\Facades\View;
use Icarus\Support\Facades\Notice;

// Init dependencies
Config::bind(['plugin' => require __DIR__ . '/../config/plugin.php']);
View::setPath(Config::get('plugin')['view']);
Notice::setKey('icarus-plugin');
