<?php
require '../db.php';

function load_option($option_name){
	$result = return_query("SELECT value FROM settings WHERE option_name = '{$option_name}'");
	// code
}
?>
