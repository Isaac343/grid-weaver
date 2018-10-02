<?php
require '../db.php';

function load_posts(){
	$result = return_query("SELECT title, author, publish_date, content FROM posts");
	// code
}

function load_specific_post($slug='', $id=''){
	$result = return_query("SELECT title, author, publish_date, content FROM posts WHERE slug = '{$slug}' OR id = {$id}");
	// code
}
?>
