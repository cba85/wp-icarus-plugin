<?php

namespace Icarus\Plugin\Controllers\Admin;

use Icarus\Support\Facades\View;
use Icarus\Support\Facades\Notice;

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
}
