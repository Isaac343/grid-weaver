<?php include ROOT . 'views/_includes/sidebar.php' ?>
<?php include ROOT . 'models/users/index.php' ?>
<h1 class="page-title">Usuarios</h1>
<div class="row row-cards row-deck mt-5">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Profesores</h3>
			</div>
			<div class="table-responsive">
				<table class="table table-hover table-outline table-vcenter text-nowrap card-table">
					<thead>
						<tr>
							<th class="text-center w-1"><i class="icon-people"></i></th>
							<th>Nombre</th>
							<th class="text-center">Matrícula</th>
							<th class="text-center">Teléfono</th>
							<th class="text-center">E-mail</th>
							<th class="text-center">Área</th>
							<th class="text-center">Más</th>
						</tr>
					</thead>
					<tbody>
					 	<?php if (mysqli_num_rows($result) > 0): ?>
							<?php while ($row = mysqli_fetch_assoc($result)): ?>
								<tr>
									<td class="text-center">
										<div class="avatar d-block">
											<?php echo $row['user_name'][0] . $row['user_lastname'][0]; ?>
										</div>
									</td>
									<td>
										<div><?php echo $row['user_name']; ?> <?php echo $row['user_lastname']; ?></div>
										<div class="small text-muted">
											<?php echo $row['user_profile']; ?>
										</div>
									</td>
									<td class="text-center">
										<?php echo $row['user_school_id']; ?>
									</td>
									<td class="text-center">
										<?php echo $row['user_phone']; ?>
									</td>
									<td class="text-center">
										<?php echo $row['user_email']; ?>
									</td>
									<td class="text-center">
										<?php echo $row['user_area']; ?>
									</td>
									<td class="text-center">
										<div class="item-action dropdown">
											<a href="javascript:void(0)" data-toggle="dropdown" class="icon" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
											</a>
											<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(15px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
												<a href="<?php echo URL; ?>users/update/<?php echo $row['IdUser']; ?>" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Editar </a>
												<a href="<?php echo URL; ?>users/delete/<?php echo $row['IdUser']; ?>" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Eliminar</a>
											</div>
										</div>
									</td>
								</tr>
							<?php endwhile; ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Administradores</h3>
			</div>
			<div class="table-responsive">
				<table class="table table-hover table-outline table-vcenter text-nowrap card-table">
					<thead>
						<tr>
							<th class="text-center w-1"><i class="icon-people"></i></th>
							<th>Nombre</th>
							<th class="text-center">Matricula</th>
							<th class="text-center">Telefono</th>
							<th class="text-center">E-mail</th>
							<th class="text-center">Más</th>
						</tr>
					</thead>
					<tbody>
						<?php if (mysqli_num_rows($result_admin) > 0): ?>
							<?php while ($row = mysqli_fetch_assoc($result_admin)): ?>
								<tr>
									<td class="text-center">
										<div class="avatar d-block">
											<?php echo $row['user_name'][0] . $row['user_lastname'][0]; ?>
										</div>
									</td>
									<td>
										<div><?php echo $row['user_name']; ?> <?php echo $row['user_lastname']; ?></div>
										<div class="small text-muted">
											<?php echo $row['user_profile']; ?>
										</div>
									</td>
									<td class="text-center">
										<?php echo $row['user_school_id']; ?>
									</td>
									<td class="text-center">
										<?php echo $row['user_phone']; ?>
									</td>
									<td class="text-center">
										<?php echo $row['user_email']; ?>
									</td>
									<td class="text-center">
										<div class="item-action dropdown">
											<a href="javascript:void(0)" data-toggle="dropdown" class="icon" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
											</a>
											<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(15px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
												<a href="<?php echo URL; ?>users/update/<?php echo $row['IdUser']; ?>" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Editar</a>
												<a href="<?php echo URL; ?>users/delete/<?php echo $row['IdUser']; ?>" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Eliminar</a>
											</div>
										</div>
									</td>
								</tr>
							<?php endwhile; ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include ROOT . 'views/_includes/footer.php' ?>
