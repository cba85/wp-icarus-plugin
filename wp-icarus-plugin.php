<?php

/**
 * Plugin Name: WP Icarus plugin
 * Plugin URI:  https://github.com/cba85/wp-icarus-plugin
 * Description: Wordpress Icarus plugin framework boilerplate.
 * Version:     dev
 * Author:      Clément Barbaza
 * Author URI:  https://clementbarbaza.com/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: icarus
 * Domain Path: /resources/lang
 */

use Icarus\Routing\Router;
use Icarus\Support\Facades\Config;
use Icarus\Support\Facades\View;

require __DIR__ . '/vendor/autoload.php';

Config::bind(['plugin' => require __DIR__ . '/config/plugin.php']);

View::setPath(Config::get('plugin')['view']);

$router = new Router;
$router->load(Config::get('plugin')['routes'])
    ->direct($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD'])
    ->createMenus();
