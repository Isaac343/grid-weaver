<?php include ROOT . 'views/_includes/sidebar.php' ?>
<h1 class="page-title text-center">En turno</h1>
<div class="col-12 col-md-10 offset-md-1 mt-5">
	<div class="card">
		<div class="table-responsive">
			<table class="table table-hover table-outline table-vcenter text-nowrap card-table">
				<thead>
					<tr>
						<th class="text-center w-1"><i class="icon-people"></i></th>
						<th>Nombre</th>
						<th class="text-center">Matrícula</th>
						<th class="text-center">Hora de acceso</th>
						<th class="text-center">Total hasta ahora</th>
						<th class="text-center">Más</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center">
							<div class="avatar d-block">
								MP
								<span class="avatar-status bg-green"></span>
							</div>
						</td>
						<td>
							<div>Miguel Pérez</div>
							<div class="small text-muted">
								Ing. En Electrónica
							</div>
						</td>
						<td class="text-center">
							2916LC09I007
						</td>
						<td class="text-center">
							08:00
						</td>
						<td class="text-center">
							01:00
						</td>
						<td class="text-center">
							<button href="#" class="btn btn-pill btn-danger btn-sm">
								Detener
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include ROOT . 'views/_includes/footer.php' ?>
