<?php
require( dirname( __FILE__ ) . '/gw-includes/theme-API/' );

theme_essentials();

require( dirname( __FILE__ ) . '/gw-content/themes/' . load_option('theme_name')  . 'template.php');
?>
