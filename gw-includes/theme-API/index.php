<?php
function theme_essentials(){
	require( dirname( __FILE__ ) . '/load-settings.php' );

	require( dirname( __FILE__ ) . '/load-posts.php' );
}

function theme_extras(){
	require( dirname( __FILE__ ) . '/list-pages.php' );
}
?>
