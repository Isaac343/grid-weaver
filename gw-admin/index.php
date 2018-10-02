<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) .DS. 'gw-admin' .DS);
define('URL', 'http://localhost/grid-weaver/gw-admin/');
define('STATIC_URL', 'http://localhost/grid-weaver/gw-admin/');

require_once ROOT . 'config' .DS. 'autoload.php';
Config\Autoload::callObject();
require_once ROOT . 'template.php';
Config\Router::runConnectivity(new Config\Request());
?>
