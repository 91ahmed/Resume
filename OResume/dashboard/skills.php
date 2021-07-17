<?php 
	require_once('layout/header.php');
	require_once('layout/navbar.php');
?>

	<div style="height: 60px;"></div>

	<section class="section">
		<h3 class="section-title">Skills</h3>
		<div style="height: 40px;"></div>

		<button type="button" class="btn btn-sm btn-light mb-3" data-toggle="modal" data-target="#add-modal"><i class="icon-plus"></i> Add</button>

		<div class="row">
			<div class="col-12">
				<form method="POST" action="lib/script.php">

					<div class="column mb-3">
						<div class="form-group">
							<label>Skills Summary</label>
							<textarea class="form-control" name="skills_summary" value="<?= getData()->skills_summary ?>" rows="5"><?= getData()->skills_summary ?></textarea>
						</div>
					</div>
					
					<?php foreach(getData()->skills as $key => $value): ?>
					<div class="card card-custom">
						<div class="card-header">
							<h4 style="font-size: 14px; font-weight: 600;"><?= $value['skill'] ?></h4>
						</div>
						<div class="card-body">
							<div class="form-group">
								<label>Skill</label>
								<input type="text" class="form-control" name="skills_skill[]" value="<?= $value['skill'] ?>" >
							</div>
							<div class="form-group">
								<label>Percentage</label>
								<input type="text" class="form-control" name="skills_percentage[]" value="<?= $value['percentage'] ?>" >
							</div>
							<div class="form-group">
								<a href="lib/script.php?delete_skills=<?= $key ?>" class="btn btn-light"><i class="icon-trash"></i> delete</a>
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
	        <h5 class="modal-title" id="exampleModalLabel">Add Skill</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<label>Skill <small>*(required)</small></label>
	      	<input type="text" class="form-control" name="add_skill" placeholder="your skill" >
	      	<br>
	      	<label>Percentage <small>*(required)</small></label>
	      	<input type="text" class="form-control" name="add_percentage" placeholder="50%" >
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