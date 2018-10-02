<?php
require_once ROOT . 'config/connection.php';
$sql = "SELECT * FROM `users` WHERE `user_rank` = 0 ";
$result = mysqli_query($conn, $sql);

$sql_emp = "SELECT * FROM `users` WHERE `user_rank` = 1 ";
$result_admin = mysqli_query($conn, $sql_emp);
 ?>
