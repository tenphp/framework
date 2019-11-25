<?php
require 'vendor/autoload.php';

define("ROOT_DIR", __DIR__);

$config_folder = 'configs';

$routes_folder = 'routes';

new Speedly\Bootstrap(ROOT_DIR, [
    'config' => $config_folder,
    'routes' => $routes_folder
]);
