<?php

require_once __DIR__ . '/../vendor/autoload.php';

$plugin = new Icarus\Plugin;
$plugin->bootstrap();
return $plugin;
