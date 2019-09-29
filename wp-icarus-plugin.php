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

use Icarus\Plugin\Controllers\Admin\AdminController;
use Icarus\Plugin\Controllers\WordpressController;

$plugin = require __DIR__ . '/bootstrap/plugin.php';

if (is_admin()) {
    (new AdminController)->run();
}

(new WordpressController)->run();
