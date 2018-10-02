<?php include ROOT . 'views/_includes/sidebar.php' ?>
<div class="col-sm-8 offset-2">
	<h1 class="page-title offset-3">Horas laboradas</h1>
</div>
<div class="col-sm-12 col-md-8 offset-md-2 mt-5">
	<form>
		<div class="form-row align-items-center">
			<div class="col-sm-12 col-md-4">
				<div class="form-group">
					<label class="form-label">Profesor</label>
					<input class="form-control" name="example-text-input" placeholder="Usuario / Matricula" type="text" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-3">
				<div class="form-group">
					<label class="form-label">Fecha inicio</label>
					<input class="form-control" name="example-text-input" type="date" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-3">
				<div class="form-group">
					<label class="form-label">Fecha fin</label>
					<input class="form-control" name="example-text-input" type="date" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-2">
				<div class="form-group">
					<label class="form-label">_</label>
					<button type="submit" class="btn btn-primary align-bottom">Buscar</button>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="col-sm-12 col-md-8 offset-2">
  <div class="card">
    <div class="card-header justify-content-between">
			<h3 class="card-title">Miguel Perez</h3>
			<div><span class="badge badge-secondary">Ingenieria</span></div>
    </div>
    <div class="table-responsive">
      <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
        <thead>
          <tr>
            <th class="text-center">Fecha</th>
            <th class="text-center">Hora de acceso</th>
            <th class="text-center">Hora de salida</th>
						<th class="text-center">Total por día</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">
              12/09/18
            </td>
            <td class="text-center">
              08:00
            </td>
            <td class="text-center">
              12:00
            </td>
						<td class="text-center">
              03:00
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="card-footer">
      <div class="d-flex justify-content-end">
				<h3 class="p-1 card-title">Total <span class="badge badge-primary">55h</span></h3>
      </div>
    </div>
  </div>
</div>
<?php include ROOT . 'views/_includes/footer.php' ?>
