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
use Icarus\Plugin\Hooks\Activation;
use Icarus\Plugin\Hooks\Deactivation;
use Icarus\Support\Facades\Hook;

$plugin = require __DIR__ . '/bootstrap/plugin.php';

Hook::register('activation', __FILE__, function () {
    new Activation;
})->register('deactivation', __FILE__, function() {
    new Deactivation;
});

if (is_admin()) {
    new AdminController;
}

new WordpressController;
