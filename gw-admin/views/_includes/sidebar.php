<?php RequiredSession(); ?>
<div id="home" class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-3 col-xl-2 sidebar">
			<a href="#" class="side-brand text-center">
				<span>
					<img src="<?php echo STATIC_URL; ?>img/logo.svg" class="header-brand-img" alt="ittaccess">
				</span>
			</a>
			<ul class="nav side-nav nav-tabs">

				<li class="nav-item nav-title">Control</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URL; ?>work">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
						En turno
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URL; ?>work/days">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
						Por días
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URL; ?>work/hours">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
						Por horas
					</a>
				</li>

				<li class="nav-item nav-title">Usuarios</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URL; ?>users">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
						Todos
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URL; ?>users/add">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
						Crear usuario
					</a>
				</li>

				<li class="nav-item nav-title">Configuración</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo URL; ?>api">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-code"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
						API
					</a>
				</li>
			</ul>
		</div>
		<div class="col-12 col-md-9 col-xl-10 left-page">
			<?php include 'header.php' ?>
			<div class="content">
