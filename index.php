<?php
<<<<<<< Updated upstream
// Loads the Grid Weaver Environment and Template
require( dirname( __FILE__ ) . '/loader.php' );
// No more
=======
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) .DS. 'app' .DS);
define('URL', 'http://localhost/grid-weaver/');
define('STATIC_URL', 'http://localhost/grid-weaver/');

date_default_timezone_set("America/Mexico_City");

require_once ROOT . 'config/router.php';
require_once ROOT . 'config/request.php';

include ROOT . 'models/session.php';

require_once ROOT . 'template.php';

Config\Router::runConnectivity(new Config\Request());
?>
>>>>>>> Stashed changes
