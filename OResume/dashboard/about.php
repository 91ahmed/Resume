<?php 
	require_once('layout/header.php');
	require_once('layout/navbar.php');
?>

	<div style="height: 60px;"></div>

	<section class="section">
		<h3 class="section-title">About</h3>
		<div style="height: 80px;"></div>

		<div class="row">
			<div class="col-12">
				<form method="POST" action="lib/script.php" enctype="multipart/form-data">
					
					<div class="row">

						<div class="column col-sm-3">
							<img src="uploads/avatar/<?= getData()->image ?>" style="width:100%;" alt="avatar">
						</div>
						<div class="column col-sm-9">
							<div class="form-group">
								<label>Image</label>
								<input type="hidden" name="old_image" value="<?= getData()->image ?>" >
								<input type="file" class="form-control" name="image">
								<small>Maximum image size 2M</small>
							</div>
						</div>

						<div class="m-4"></div>

						<div class="column col-12">
							<div class="form-group">
								<label>Welcome</label>
								<input type="text" class="form-control" name="about_welcome" value="<?= getData()->about_welcome ?>">
							</div>
						</div>
						
						<div class="column col-12">
							<div class="form-group">
								<label>Summary</label>
								<textarea class="form-control" name="about_summary" value="<?= getData()->about_summary ?>" rows="5"><?= getData()->about_summary ?></textarea>
							</div>
						</div>

						<div class="column col-12 mb-3 mt-3">
							<h4>Info.</h4>
						</div>

						<div class="column col-12 mb-3">
							<button type="button" class="btn btn-sm btn-light" data-toggle="modal" data-target="#add-modal"><i class="icon-plus"></i> Add</button>
						</div>

						<?php foreach(getData()->about as $key => $value): ?>
						<div class="column col-12 mb-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<a href="lib/script.php?delete_about=<?= $key ?>" class="input-group-text" id="" style="font-size: 14px;font-weight: 400;">delete</a>
								</div>
								<input type="text" class="form-control" name="about_title[]" value="<?= $value['title'] ?>">
								<input type="text" class="form-control" name="about_details[]" value="<?= $value['details'] ?>">
							</div>
						</div>
						<?php endforeach; ?>
					</div>

					<button type="submit" class="btn btn-danger">Update</button><!-- Update Button -->

				</form>
				
			</div>

		</div>
	</section>


<!-- Add Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="lib/script.php" method="POST">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Info</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<label>Title <small>*(required)</small></label>
	      	<input type="text" class="form-control" name="add_about_title" placeholder="Job" >
	      	<br>
	      	<label>Details <small>*(required)</small></label>
	      	<input type="text" class="form-control" name="add_about_details" placeholder="CEO" >
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-info">Add</button>
	      </div>
  		</form>
    </div>
  </div>
</div>

<?php 
	require_once('layout/footer.php');
?>