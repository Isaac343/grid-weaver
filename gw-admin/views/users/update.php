<?php include ROOT . 'views/_includes/sidebar.php' ?>
<?php include ROOT . 'models/users/update.php' ?>
<h1 class="page-title">Usuarios</h1>
<div class="row justify-content-center">
	<div class="col-12 col-md-9 mt-5">
		<form class="card" method="post" action="">
      <?php if (mysqli_num_rows($result) > 0): ?>
        <?php $row = mysqli_fetch_assoc($result); ?>
      <div class="card-body">
				<div class="form-row">
					<div class="form-group col-md-4">
						<label>Nombre de usuario</label>
						<input class="form-control" placeholder="juanperez" name="username" required="" type="text" value=<?php  echo $row["user_username"]; ?>>
					</div>
					<div class="form-group col-md-4">
						<label>Nombre(s)</label>
						<input class="form-control" placeholder="Juan" name="name" required="" type="text"value=<?php  echo $row["user_name"]; ?>>
					</div>
					<div class="form-group col-md-4">
						<label>Apellidos</label>
						<input class="form-control" placeholder="Perez" name="lastname" required="" type="text" value=<?php  echo $row["user_lastname"]; ?>>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label>Matrícula</label>
						<input class="form-control" placeholder="XXXXXXX" name="school_id" required="" type="text" value=<?php  echo $row["user_school_id"]; ?>>
					</div>
					<div class="form-group col-md-8">
						<label>Perfil</label>
						<input class="form-control" placeholder="Licenciatura en Arquitectura" name="profile" required="" type="text" value=<?php  echo $row["user_profile"]; ?>>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Teléfono</label>
						<input class="form-control" placeholder="1234567891" pattern="[0-9]{10}" name="phone" required="" type="tel" value=<?php  echo $row["user_phone"]; ?>>
					</div>
					<div class="form-group col-md-6">
						<label>Rango</label>
						<select class="form-control" name="rank" required>
							<option value="1" <?php echo ($row["user_rank"] > 0 ? 'selected' : ''); ?>>Administrador</option>
							<option value="0" <?php echo ($row["user_rank"] < 1 ? 'selected' : ''); ?>>Empleado</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Email</label>
						<input class="form-control" placeholder="Email" name="email" required="" type="email" value=<?php  echo $row["user_email"]; ?>>
					</div>
					<div class="form-group col-md-6">
						<label>Contraseña</label>
						<input class="form-control" placeholder="Contraseña" name="password" required="" type="password">
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="send" value="1">Crear</button>
			</div>
      <?php endif; ?>
		</form>
	</div>
</div>
<?php include ROOT . 'views/_includes/footer.php' ?>
