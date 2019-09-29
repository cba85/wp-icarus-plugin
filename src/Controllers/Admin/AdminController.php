<?php

namespace Icarus\Plugin\Controllers\Admin;

use Icarus\Support\Facades\View;
use Icarus\Support\Facades\Notice;
use Icarus\Support\Facades\Menu;
use Icarus\Support\Facades\Admin;
use Icarus\Support\Facades\Style;
use Icarus\Support\Facades\Script;
use Icarus\Support\Facades\Config;

class AdminController
{
    protected $page = "admin.php?page=wp-icarus";

    public function index()
    {
        return View::render('index');
    }

    public function save()
    {
        // Do something...
        Notice::create('success', "Form has been submitted!");
        wp_redirect(admin_url($this->page));
    }

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

    protected function registerActions()
    {
        Admin::action('process_test', function () {
            return $this->save();
        });
    }

    protected function loadAssets()
    {
        Style::setPath(Config::get('plugin')['styles'])
            ->add('wp-icarus-admin', 'admin.css', [], false, 'all')
            ->save('admin_enqueue_scripts');

        Script::setPath(Config::get('plugin')['scripts'])
            ->add('wp-icarus-admin', 'admin.js', [], false, 'all')
            ->save('admin_enqueue_scripts');
    }

    public function run()
    {
        $this->loadAssets();
        $this->createMenu();
        $this->registerActions();
    }
}
