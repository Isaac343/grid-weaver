<?php include ROOT . 'views/_includes/sidebar.php' ?>
<?php include ROOT . 'models/users/add.php' ?>
<h1 class="page-title text-center">Añadir usuario</h1>
<div class="row justify-content-center">
	<div class="col-12 col-md-9 mt-5">
		<form class="card" method="post" action="">
			<div class="card-body">
				<div class="form-row">
					<div class="form-group col-md-4">
						<label>Nombre de usuario</label>
						<input type="text" class="form-control" placeholder="juanperez" name="username" required>
					</div>
					<div class="form-group col-md-4">
						<label>Nombre(s)</label>
						<input type="text" class="form-control" placeholder="Juan" name="name" required>
					</div>
					<div class="form-group col-md-4">
						<label>Apellidos</label>
						<input type="text" class="form-control" placeholder="Perez" name="lastname" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label>Matrícula</label>
						<input type="text" class="form-control" placeholder="XXXXXXX" name="school_id" required>
					</div>
					<div class="form-group col-md-8">
						<label>Perfil</label>
						<input type="text" class="form-control" placeholder="Licenciatura en Arquitectura" name="profile" required>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Teléfono</label>
						<input type="tel" class="form-control" placeholder="1234567891" pattern="[0-9]{10}" name="phone" required>
					</div>
					<div class="form-group col-md-6">
						<label>Rango</label>
						<select class="form-control" name="rank" required>
							<option value="1">Administrador</option>
							<option value="0" selected>Empleado</option>
						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Email</label>
						<input type="email" class="form-control" placeholder="Email" name="email" required>
					</div>
					<div class="form-group col-md-6">
						<label>Contraseña</label>
						<input type="password" class="form-control" placeholder="Contraseña" name="password" required>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name="send" value="1">Crear</button>
			</div>
		</form>
	</div>
</div>
<?php include ROOT . 'views/_includes/footer.php' ?>
