<?php
	require ROOT . '/models/connection.php';

	if (isset($_POST['login_send'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT IdUser, user_name, user_lastname, user_password, user_area, user_rank FROM gw_users WHERE user_username = '{$username}'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {

			$row = mysqli_fetch_assoc($result);

			if (password_verify($password, $row['user_password'])) {
				$_SESSION['loggedin'] = true;
				$_SESSION['myrow'] = $row;

				header('Location: '.URL.'work');
			} else {
				echo "Contraseña incorrecta.";
			}
		} else {
			echo "El Usuario no existe.";
		}
	}
?>
