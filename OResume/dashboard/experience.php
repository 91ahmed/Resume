<?php 
	require_once('layout/header.php');
	require_once('layout/navbar.php');
?>

	<div style="height: 60px;"></div>

	<section class="section">
		<h3 class="section-title">Experience</h3>
		<div style="height: 40px;"></div>

		<button type="button" class="btn btn-sm btn-light mb-3" data-toggle="modal" data-target="#add-modal"><i class="icon-plus"></i> Add</button>

		<div class="row">
			<div class="col-12">
				<form method="POST" action="lib/script.php">
					
					<?php foreach(getData()->experience as $key => $value): ?>
					<div class="card card-custom">
						<div class="card-header">
							<h4 style="font-size: 14px; font-weight: 600;"><?= $value['title'] ?></h4>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Date</label>
								<input type="text" class="form-control" name="experience_date[]" value="<?= $value['date'] ?>" >
							</div>
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" name="experience_title[]" value="<?= $value['title'] ?>" >
							</div>
							<div class="form-group">
								<label>Details</label>
								<textarea class="form-control" name="experience_details[]" value="<?= $value['details'] ?>" rows="4"><?= $value['details'] ?></textarea>
							</div>
							<div class="form-group">
								<a href="lib/script.php?delete_experience=<?= $key ?>" class="btn btn-light"><i class="icon-trash"></i> delete</a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>

					<br>
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
	        <h5 class="modal-title" id="exampleModalLabel">Add Experience</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<label>Date <small>*(required)</small></label>
	      	<input type="text" class="form-control" name="add_experience_date" placeholder="2010 - 2015" >
	      	<br>
	      	<label>Title <small>*(required)</small></label>
	      	<input type="text" class="form-control" name="add_experience_title" placeholder="Information system" >
	      	<br>
	      	<label>Details <small>*(required)</small></label>
	      	<textarea class="form-control" name="add_experience_details" placeholder="..." rows="4"></textarea>
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