<?php
	session_start();

	function RequiredSession(){
		if (isset($_SESSION['loggedin'])) {
		} else {
			header('Location: '.URL.'');
		}
	}
?>
