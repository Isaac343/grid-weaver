<div class="row admin-part">
	<?php include ROOT . 'views/_includes/sidebar.php' ?>
	<div class="col-10">
		<div class="row justify-content-center">
			<div class="col-8">
				<div class="new-user-form shadow-lg py-4 px-5 mt-8 rounded">
					<h3>Add new posts</h3>
          <form action="" method="post">
            <div class="form-group">
              <input type="text"  class="admin-form-input font-weight-bold" name="post-title" placeholder="Insert post title here...">
            </div>
						<div class="form-group">
							<textarea class="admin-form-input font-weight-bold" name="post_content" rows="4" cols="80" placeholder="Instert your content here..."></textarea>
						</div>
						<div class="form-group">
							<input type="text" name="" value="">
						</div>
						<div class="form-group">
							<button type="submit" class="btn admin-add-button btn-lg" name="new_post" value="1">Create</button>
						</div>
          </form>
				</div>
			</div>
      <div class="col-2">
        <div class="new-user-form shadow-lg py-4 px-5 mt-8 rounded">
          <h4>Post options</h4>

        </div>

      </div>
		</div>
	</div>
</div>
