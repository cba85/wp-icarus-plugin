<?php

$router->admin(function () use ($router) {

    $router->menu->page(
        'WP Icarus page',
        'WP Icarus page',
        'manage_options',
        'wp-icarus',
        function () {
            return (new \Icarus\Plugin\Controllers\Admin\AdminController)->index();
        },
        'dashicons-admin-page',
        58);

    $router->menu->subPage(
        'wp-icarus',
        'WP Icarus subpage',
        'WP Icarus subpage',
        'manage_options',
        'wp-icarus-2',
        function () {
            return (new \Icarus\Plugin\Controllers\Admin\AdminController)->index();
        }
    );

    $router->action('/wp/wp-admin/admin-post.php', 'process_test', '\Icarus\Plugin\Controllers\Admin\AdminController@save');
});
