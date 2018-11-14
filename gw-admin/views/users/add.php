<div class="row admin-part">
	<?php include ROOT . 'views/_includes/sidebar.php' ?>
	<div class="col-10">
		<div class="row justify-content-center">
			<div class="col-5">
				<div class="shadow-lg py-4 px-5 mt-8 bg-white rounded">
					<form action="" method="POST">
						<h3 class="text-center">New user</h3>
						<div class="form-group">
							<input class="form-control font-weight-bold" type="text" name="username" placeholder="Username">
						</div>
						<div class="form-group">
						  <input class="form-control font-weight-bold" type="text" name="name" placeholder="Name">
						</div>
					  <div class="form-group">
						 	<input class="form-control font-weight-bold" type="text" name="surname" placeholder="Surname">
					  </div>
					 	<div class="form-group">
						  	<input class="form-control font-weight-bold" type="text" name="email" placeholder="E-mail">
					 	</div>
					 	<div class="form-group">
						 	<input class="form-control font-weight-bold" type="text" name="rol" placeholder="Rol">
					 	</div>
						<div class="form-group">
							<input class="form-control font-weight-bold" type="password" name="password" placeholder="Password">
						</div>
						<div class="form-group">
							<button type="submit"  class="btn btn-primary btn-lg" name="new_user" value="1">Create</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-5">

			</div>
		</div>
	</div>
</div>
