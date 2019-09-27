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
 * Text Domain: wp-icarus
 * Domain Path: /resources/lang
 */

 // Composer autoload
require __DIR__ . '/vendor/autoload.php';

// Init plugin dependencies
require __DIR__ . '/bootstrap/plugin.php';

// Register routes
require __DIR__ . '/bootstrap/routes.php';

// Register scripts and styles
require __DIR__ . '/bootstrap/assets.php';
