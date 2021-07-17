<?php 
	require_once('layout/header.php');
	require_once('layout/navbar.php');
?>

	<div style="height: 60px;"></div>

	<section class="section">
		<h3 class="section-title">Portfolio</h3>
		<div style="height: 40px;"></div>

		<button type="button" class="btn btn-sm btn-light mb-3" data-toggle="modal" data-target="#add-modal"><i class="icon-plus"></i> Add</button>

		<div class="row">
			<div class="col-12">
	
				<?php foreach(getData()->portfolio as $key => $value): ?>
				<div class="card card-custom">
					<div class="card-header">
						<h4 style="font-size: 14px; font-weight: 600;"><?= $value['title'] ?></h4>
					</div>
					<div class="card-body">
						<form method="POST" action="lib/script.php" enctype="multipart/form-data">
							<input type="hidden" name="portfolio_key" value="<?= $key ?>">
							<div class="row">
								<div class="col-sm-3">
									<div class="form-group">
										<img src="uploads/portfolio/<?= $value['image'] ?>" style="width:100%;" alt="portfolio_image">
									</div>
								</div>
								<div class="col-sm-9">
									<div class="form-group">
										<label>Image</label>
										<input type="hidden" name="portfolio_old_image" value="<?= $value['image'] ?>">
										<input type="file" name="portfolio_image" class="form-control" >
										<small>Maximum image size 2M </small>
									</div>
									<div class="form-group">
										<label>Title</label>
										<input type="text" class="form-control" name="portfolio_title" value="<?= $value['title'] ?>" >
									</div>
									<div class="form-group">
										<label>Link</label>
										<input type="text" class="form-control" name="portfolio_link" value="<?= $value['link'] ?>" >
									</div>
									<div class="form-group">
										<label>Details</label>
										<textarea class="form-control" name="portfolio_details" value="<?= $value['details'] ?>" rows="4"><?= $value['details'] ?></textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-danger">Update</button>
										<a href="lib/script.php?delete_portfolio=<?= $key ?>" class="btn btn-light"><i class="icon-trash"></i> delete</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<?php endforeach; ?>
			</div>

		</div>
	</section>


<!-- Add Modal -->
<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="lib/script.php" method="POST" enctype="multipart/form-data">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Work</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<div class="form-group">
		      	<label>Image <small>*(required)</small></label>
		      	<input type="file" class="form-control" name="add_portfolio_image">
		      	<small>Maximum image size 2M </small>
	      	</div>
	      	<div class="form-group">
		      	<label>Title <small>*(required)</small></label>
		      	<input type="text" class="form-control" name="add_portfolio_title" placeholder="Project title" >
	      	</div>
	      	<div class="form-group">
		      	<label>Link <small>*(required)</small></label>
		      	<input type="text" class="form-control" name="add_portfolio_link" placeholder="http://www.example.com" value="#" >
	      	</div>
	      	<div class="form-group">
		      	<label>Details <small>*(required)</small></label>
		      	<textarea class="form-control" name="add_portfolio_details" placeholder="..." rows="4"></textarea>
	      	</div>
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