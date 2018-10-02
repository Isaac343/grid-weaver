<?php include ROOT . 'views/_includes/sidebar.php' ?>
<h1 class="page-title">Escritorio</h1>
<div class="row row-cards">
	<div class="col-6 col-sm-4 col-lg-2">
		<div class="card">
			<div class="card-body p-3 text-center">
				<div class="text-right text-green">
					6%
					<i class="fe fe-chevron-up"></i>
				</div>
				<div class="h1 m-0">43</div>
				<div class="text-muted mb-4">asdfks</div>
			</div>
		</div>
	</div>
	<div class="col-6 col-sm-4 col-lg-2">
		<div class="card">
			<div class="card-body p-3 text-center">
				<div class="text-right text-red">
					-3%
					<i class="fe fe-chevron-down"></i>
				</div>
				<div class="h1 m-0">17</div>
				<div class="text-muted mb-4">Asds Adas</div>
			</div>
		</div>
	</div>
	<div class="col-6 col-sm-4 col-lg-2">
		<div class="card">
			<div class="card-body p-3 text-center">
				<div class="text-right text-green">
					9%
					<i class="fe fe-chevron-up"></i>
				</div>
				<div class="h1 m-0">7</div>
				<div class="text-muted mb-4">asdas sadas</div>
			</div>
		</div>
	</div>
	<div class="col-6 col-sm-4 col-lg-2">
		<div class="card">
			<div class="card-body p-3 text-center">
				<div class="text-right text-green">
					3%
					<i class="fe fe-chevron-up"></i>
				</div>
				<div class="h1 m-0">27.3K</div>
				<div class="text-muted mb-4">asdsa</div>
			</div>
		</div>
	</div>
	<div class="col-6 col-sm-4 col-lg-2">
		<div class="card">
			<div class="card-body p-3 text-center">
				<div class="text-right text-red">
					-2%
					<i class="fe fe-chevron-down"></i>
				</div>
				<div class="h1 m-0">$95</div>
				<div class="text-muted mb-4">sadas asdas</div>
			</div>
		</div>
	</div>
	<div class="col-6 col-sm-4 col-lg-2">
		<div class="card">
			<div class="card-body p-3 text-center">
				<div class="text-right text-red">
					-1%
					<i class="fe fe-chevron-down"></i>
				</div>
				<div class="h1 m-0">621</div>
				<div class="text-muted mb-4">sadasda</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Actividad</h3>
			</div>
			<div id="chart-development-activity"></div>
			<div class="table-responsive">
				<table class="table card-table table-striped table-vcenter">
					<thead>
						<tr>
							<th colspan="2">User</th>
							<th>Commit</th>
							<th>Date</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="w-1"><span class="avatar" style="background-image: url(./demo/faces/male/9.jpg)"></span></td>
							<td>Ronald Bradley</td>
							<td>Initial commit</td>
							<td class="text-nowrap">May 6, 2018</td>
							<td class="w-1"><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
						</tr>
						<tr>
							<td><span class="avatar">BM</span></td>
							<td>Russell Gibson</td>
							<td>Main structure</td>
							<td class="text-nowrap">April 22, 2018</td>
							<td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
						</tr>
						<tr>
							<td><span class="avatar" style="background-image: url(./demo/faces/female/1.jpg)"></span></td>
							<td>Beverly Armstrong</td>
							<td>Left sidebar adjustments</td>
							<td class="text-nowrap">April 15, 2018</td>
							<td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
						</tr>
						<tr>
							<td><span class="avatar" style="background-image: url(./demo/faces/male/4.jpg)"></span></td>
							<td>Bobby Knight</td>
							<td>Topbar dropdown style</td>
							<td class="text-nowrap">April 8, 2018</td>
							<td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
						</tr>
						<tr>
							<td><span class="avatar" style="background-image: url(./demo/faces/female/11.jpg)"></span></td>
							<td>Sharon Wells</td>
							<td>Fixes #625</td>
							<td class="text-nowrap">April 9, 2018</td>
							<td><a href="#" class="icon"><i class="fe fe-trash"></i></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<script>
			require(['c3', 'jquery'], function(c3, $) {
				$(document).ready(function(){
					var chart = c3.generate({
						bindto: '#chart-development-activity', // id of chart wrapper
						data: {
							columns: [
									// each columns data
								['data1', 0, 5, 1, 2, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 2, 2, 6, 30, 10, 10, 15, 14, 47, 65, 55]
							],
							type: 'area', // default type of chart
							groups: [
								[ 'data1', 'data2', 'data3']
							],
							colors: {
								'data1': tabler.colors["blue"]
							},
							names: {
									// name of each serie
								'data1': 'Logeos'
							}
						},
						axis: {
							y: {
								padding: {
									bottom: 0,
								},
								show: false,
									tick: {
									outer: false
								}
							},
							x: {
								padding: {
									left: 0,
									right: 0
								},
								show: false
							}
						},
						legend: {
							position: 'inset',
							padding: 0,
							inset: {
													anchor: 'top-left',
								x: 20,
								y: 8,
								step: 10
							}
						},
						tooltip: {
							format: {
								title: function (x) {
									return '';
								}
							}
						},
						padding: {
							bottom: 0,
							left: -1,
							right: -1
						},
						point: {
							show: false
						}
					});
				});
			});
		</script>
	</div>
	<div class="col-md-6">
		<div class="alert alert-primary">Algun problema? <a href="./docs/index.html" class="alert-link">Reportalo aqui</a>.</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Chart title</h3>
					</div>
					<div class="card-body">
						<div id="chart-donut"></div>
					</div>
				</div>
				<script>
					require(['c3', 'jquery'], function(c3, $) {
						$(document).ready(function(){
							var chart = c3.generate({
								bindto: '#chart-donut', // id of chart wrapper
								data: {
									columns: [
											// each columns data
										['data1', 63],
										['data2', 37]
									],
									type: 'donut', // default type of chart
									colors: {
										'data1': tabler.colors["green"],
										'data2': tabler.colors["green-light"]
									},
									names: {
											// name of each serie
										'data1': 'Maximum',
										'data2': 'Minimum'
									}
								},
								axis: {
								},
								legend: {
													show: false, //hide legend
								},
								padding: {
									bottom: 0,
									top: 0
								},
							});
						});
					});
				</script>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Chart title</h3>
					</div>
					<div class="card-body">
						<div id="chart-pie"></div>
					</div>
				</div>
				<script>
					require(['c3', 'jquery'], function(c3, $) {
						$(document).ready(function(){
							var chart = c3.generate({
								bindto: '#chart-pie', // id of chart wrapper
								data: {
									columns: [
											// each columns data
										['data1', 63],
										['data2', 44],
										['data3', 12],
										['data4', 14]
									],
									type: 'pie', // default type of chart
									colors: {
										'data1': tabler.colors["blue-darker"],
										'data2': tabler.colors["blue"],
										'data3': tabler.colors["blue-light"],
										'data4': tabler.colors["blue-lighter"]
									},
									names: {
											// name of each serie
										'data1': 'A',
										'data2': 'B',
										'data3': 'C',
										'data4': 'D'
									}
								},
								axis: {
								},
								legend: {
													show: false, //hide legend
								},
								padding: {
									bottom: 0,
									top: 0
								},
							});
						});
					});
				</script>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body text-center">
						<div class="h5">New feedback</div>
						<div class="display-4 font-weight-bold mb-4">62</div>
						<div class="progress progress-sm">
							<div class="progress-bar bg-red" style="width: 28%"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body text-center">
						<div class="h5">Today profit</div>
						<div class="display-4 font-weight-bold mb-4">$652</div>
						<div class="progress progress-sm">
							<div class="progress-bar bg-green" style="width: 84%"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="card p-3">
			<div class="d-flex align-items-center">
				<span class="stamp stamp-md bg-blue mr-3">
					<i class="fe fe-dollar-sign"></i>
				</span>
				<div>
					<h4 class="m-0"><a href="javascript:void(0)">132 <small>Sales</small></a></h4>
					<small class="text-muted">12 waiting payments</small>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="card p-3">
			<div class="d-flex align-items-center">
				<span class="stamp stamp-md bg-green mr-3">
					<i class="fe fe-shopping-cart"></i>
				</span>
				<div>
					<h4 class="m-0"><a href="javascript:void(0)">78 <small>Orders</small></a></h4>
					<small class="text-muted">32 shipped</small>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="card p-3">
			<div class="d-flex align-items-center">
				<span class="stamp stamp-md bg-red mr-3">
					<i class="fe fe-users"></i>
				</span>
				<div>
					<h4 class="m-0"><a href="javascript:void(0)">1,352 <small>Members</small></a></h4>
					<small class="text-muted">163 registered today</small>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="card p-3">
			<div class="d-flex align-items-center">
				<span class="stamp stamp-md bg-yellow mr-3">
					<i class="fe fe-message-square"></i>
				</span>
				<div>
					<h4 class="m-0"><a href="javascript:void(0)">132 <small>Comments</small></a></h4>
					<small class="text-muted">16 waiting</small>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include ROOT . 'views/_includes/footer.php' ?>
