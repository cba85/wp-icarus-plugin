<?php

use Icarus\Support\Facades\Config;
use Icarus\Support\Facades\Router;

Router::load(Config::get('plugin')['routes'])
    ->direct($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD'])
    ->menu->create();
