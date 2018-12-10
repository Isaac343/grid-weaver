
<?php include ROOT . 'models/index/index.php' ?>

<div class="row admin-login">
	<div class="col col-login mx-auto">
		<div class="text-center mb-6">



		</div>
		<form class="card" action="" method="post">
			<div class="card-body p-6">
				<div class="card-title">Ingresa a tu cuenta</div>
				<div class="form-group">
					<label class="form-label">Nombre de usuario</label>

					<input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario" type="text" required>

					<input class="form-control" placeholder="Usuario" type="text" name="username" required>

				</div>
				<div class="form-group">
					<label class="form-label">
						Contraseña

						<a href="./forgot-password.html" class="float-right small">I forgot password</a>
					</label>
					<input class="form-control" id="exampleInputPassword1" placeholder="Contraseña" type="password" required>
				</div>
				<div class="form-group">
					<label class="custom-control custom-checkbox">
						<input class="custom-control-input" type="checkbox">
						<span class="custom-control-label">Recuerdame</span>
					</label>
				</div>
				<div class="form-footer">
					<button type="submit" class="btn btn-primary btn-block">Entrar</button>
				</div>
			</div>
		</form>
		<div class="text-center text-muted">
			Don't have account yet? <a href="./register.html">Sign up</a>
		</div>

					</label>
					<input class="form-control" placeholder="Contraseña" type="password" name="password" required>
				</div>
				<div class="form-footer">
					<button type="submit" name="login_send" value="1" class="btn btn-primary btn-block">Entrar</button>
				</div>
			</div>
		</form>

	</div>
</div>
