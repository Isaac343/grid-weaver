<div class="row admin-part">
	<?php include ROOT . 'views/_includes/sidebar.php' ?>

	<div class="col-10">
		<div class="row justify-content-center">
			<div class="col">
				<div class="new-user-form shadow-lg py-4 px-5 mt-8 rounded ">
					<h3>Users</h3>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Username</th>
								<th scope="col">Pages</th>
								<th scope="col">Posts</th>
								<th scope="col">Date</th>
							</tr>
						</thead>
						<tbody>
							<?php	if(mysqli_num_rows($resp) > 0):?>
								<?php while ($row = mysqli_fetch_assoc($resp)):?>
									<tr>
										<td> <?php echo $row['IdUser']; ?> </td>
										<td> <?php echo $row['user_name']; ?></td>
										<td> <?php echo $row['user_username']; ?></td>
										<td> <?php //echo $row['']; ?></td>
									</tr>
								<?php endwhile; ?>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
