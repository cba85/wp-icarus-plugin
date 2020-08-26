<?php

namespace Icarus\Plugin\Controllers\Admin;

use Icarus\Plugin\Controllers\Controller;

use Icarus\Support\Facades\Notice;
use Icarus\Support\Facades\Menu;
use Icarus\Support\Facades\Admin;

class AdminController extends Controller
{
    protected $page = "admin.php?page=wp-icarus";

    public function __construct()
    {
        parent::__construct();
        $this->loadAssets();
        $this->createMenu();
        $this->registerActions();
    }

    public function index()
    {
        return $this->view->render('index');
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
        $this->style->add('wp-icarus-admin', 'admin.css', [], false, 'all')
            ->save('admin_enqueue_scripts');

        $this->script->add('wp-icarus-admin', 'admin.js', [], false, 'all')
            ->save('admin_enqueue_scripts');
    }
}
