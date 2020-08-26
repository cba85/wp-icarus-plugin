<?php

namespace Icarus\Plugin\Controllers\Admin\Traits;

use Icarus\Support\Facades\Menu;

trait Menus
{
    protected function createMenu()
    {
        Menu::addPage('WP Icarus page', 'WP Icarus page', 'manage_options', 'wp-icarus', function () {
            return (new \Icarus\Plugin\Controllers\Admin\AdminController)->index();
        }, 'dashicons-admin-page', 58);

        Menu::addSubPage('wp-icarus', 'WP Icarus subpage', 'WP Icarus subpage', 'manage_options', 'wp-icarus-subpage', function () {
            return (new \Icarus\Plugin\Controllers\Admin\AdminController)->index();
        }, 'dashicons-admin-page', 58);

        Menu::create();
    }
}
