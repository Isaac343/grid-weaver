<?php include ROOT . 'views/_includes/sidebar.php' ?>
<?php include ROOT . 'models/work/days.php' ?>

<h1 class="page-title text-center">Días laborados</h1>
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
					<label class="form-label">Mes</label>
					<select class="form-control custom-select" name="month" required>
						<option value="01">Enero</option>
						<option value="02">Febrero</option>
						<option value="03">Marzo</option>
						<option value="04">Abril</option>
						<option value="05">Mayo</option>
						<option value="06">Junio</option>
						<option value="07">Julio</option>
						<option value="08">Agosto</option>
						<option value="09">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Diciembre</option>
					</select>
				</div>
			</div>
			<div class="col-sm-12 col-md-3">
				<div class="form-group">
					<label class="form-label">Año</label>
					<select class="form-control custom-select" name="year" required>
						<option value="18">2018</option>
						<option value="19">2019</option>
						<option value="220">2020</option>
					</select>
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
<div class="col-sm-12 col-md-10 offset-1">
  <div class="card">
    <div class="card-header justify-content-between">
			<h3 class="card-title">Miguel Perez</h3>
			<div><span class="badge badge-secondary">Ingenieria</span></div>
    </div>
		<?php
     $dateComponents = getdate();
     $month = $dateComponents['mon'];
     $year = $dateComponents['year'];
     echo build_calendar($month,$year,$dateComponents);
		?>
    <div class="card-footer">
      <div class="d-flex justify-content-end">
				<h3 class="p-1 card-title">Total <span class="badge badge-primary">55h</span></h3>
      </div>
    </div>
  </div>
</div>
<?php include ROOT . 'views/_includes/footer.php' ?>
