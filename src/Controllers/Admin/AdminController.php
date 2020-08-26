<?php

namespace Icarus\Plugin\Controllers\Admin;

use Icarus\Plugin\Controllers\Controller;

use Icarus\Support\Facades\Notice;
use Icarus\Support\Facades\Admin;
use Icarus\Plugin\Controllers\Admin\Traits\Assets;
use Icarus\Plugin\Controllers\Admin\Traits\Menus;

class AdminController extends Controller
{
    use Assets;
    use Menus;

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

    protected function registerActions()
    {
        Admin::action('process_test', function () {
            return $this->save();
        });
    }
}
