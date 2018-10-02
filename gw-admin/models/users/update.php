<?php
$rqst = new Config\Request();
$id_user = $rqst->get_argument();
$id_user = $id_user[0]; # variable con el usuario a editar

require ROOT . 'config/connection.php';
$sql = "SELECT * FROM `users` WHERE `IdUser` = '{$id_user}' ";
$result = mysqli_query($conn, $sql);

?>
