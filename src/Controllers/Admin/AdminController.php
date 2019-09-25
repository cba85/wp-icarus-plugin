<?php

namespace Icarus\Plugin\Controllers\Admin;

use Icarus\Support\Facades\View;

class AdminController
{
    public function index()
    {
        return View::render('index');
    }

    public function save()
    {
        echo 'ok';
    }
}
