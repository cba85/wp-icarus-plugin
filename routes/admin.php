<?php

$router->admin(function () use ($router) {
    $router->menuPage(
        'WP Icarus plugin',
        'WP Icarus plugin',
        'manage_options',
        'wp-icarus',
        function () {
            return (new \Icarus\Plugin\Controllers\Admin\AdminController)->index();
        },
        'dashicons-admin-page',
        58);

    $router->menuPage('WP Icarus plugin2', 'WP Icarus plugin2', 'manage_options', 'wp-icarus2', null, 'dashicons-admin-page', 59);

    $router->get('/wp/wp-admin/wp-icarus', '\Icarus\Plugin\Controllers\Admin\AdminController@index');

    $router->post('/wp/wp-admin/admin-post.php?action=process_test', '\Icarus\Plugin\Controllers\Admin\AdminController@save');
});
