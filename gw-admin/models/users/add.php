<?php
	require_once ROOT . 'config/connection.php';

	if (isset($_POST['send'])) {
		$school_id = $_POST['school_id'];
		$username = $_POST['username'];
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$profile = $_POST['profile'];
		$email = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$phone = $_POST['phone'];
		$rank = $_POST['rank'];

		$sql = "INSERT INTO `users` (`IdUser`, `user_school_id`, `user_username`, `user_name`, `user_lastname`, `user_profile`, `user_email`, `user_password`, `user_phone`, `user_rank`, `user_firm`)
		VALUES (NULL, '{$school_id}', '{$username}', '{$name}', '{$lastname}', '{$profile}', '{$email}', '{$password}', '{$phone}', '{$rank}', '')";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
?>
