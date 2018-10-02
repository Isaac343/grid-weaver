<div class="header py-4">
	<div class="container-fluid">
		<div class="d-flex">
			<div class="d-flex order-lg-2 ml-auto">
				<div class="dropdown">
					<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
						<span class="avatar"><?php echo $_SESSION['myrow']['user_name'][0] . $_SESSION['myrow']['user_lastname'][0]; ?></span>
						<span class="ml-2 d-none d-lg-block">
							<span class="text-default"><?php echo $_SESSION['myrow']['user_name'] . ' ' . $_SESSION['myrow']['user_lastname']; ?></span>
							<small class="text-muted d-block mt-1">
								<?php echo $_SESSION['myrow']['user_area']; ?>
							</small>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
						<a class="dropdown-item" href="#">
							<i class="dropdown-icon fe fe-help-circle"></i> Ayuda
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo URL; ?>logout">
							<i class="dropdown-icon fe fe-log-out"></i> Salir
						</a>
					</div>
				</div>
			</div>
			<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
				<span class="header-toggler-icon"></span>
			</a>
		</div>
	</div>
</div>
