<?php

namespace Icarus\Plugin\Controllers\Admin\Traits;

trait Assets
{
    protected function loadAssets()
    {
        $this->style->add('wp-icarus-admin', 'admin.css', [], false, 'all')
            ->save('admin_enqueue_scripts');

        $this->script->add('wp-icarus-admin', 'admin.js', [], false, 'all')
            ->save('admin_enqueue_scripts');
    }
}
