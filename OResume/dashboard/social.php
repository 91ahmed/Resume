<?php 
	require_once('layout/header.php');
	require_once('layout/navbar.php');
?>

	<div style="height: 60px;"></div>

	<section class="section">
		<h3 class="section-title">Social</h3>
		<div style="height: 40px;"></div>

		<button type="button" class="btn btn-sm btn-light mb-3" data-toggle="modal" data-target="#add-modal"><i class="icon-plus"></i> Add</button>

		<div class="row">
			<div class="col-12">
				<form method="POST" action="lib/script.php">
					
					<?php foreach(getData()->social as $key => $value): ?>
					<div class="card card-custom">
						<div class="card-body">
							<div class="form-group">
								<label>Icon</label>
								<select name="social_icon[]" class="form-control">
									<option selected="" value="<?= $value['icon'] ?>"><?= $value['icon'] ?></option>
									<option value="icon-social-tumblr">tumblr</option>
									<option value="icon-social-twitter">twitter</option>
									<option value="icon-social-facebook">facebook</option>
									<option value="icon-social-instagram">instagram</option>
									<option value="icon-social-linkedin">linkedin</option>
									<option value="icon-social-pinterest">pinterest</option>
									<option value="icon-social-github">github</option>
									<option value="icon-social-google">google</option>
									<option value="icon-social-reddit">reddit</option>
									<option value="icon-social-skype">skype</option>
									<option value="icon-social-dribbble">dribbble</option>
									<option value="icon-social-behance">behance</option>
									<option value="icon-social-foursqare">foursqare</option>
									<option value="icon-social-soundcloud">soundcloud</option>
									<option value="icon-social-spotify">spotify</option>
									<option value="icon-social-stumbleupon">stumbleupon</option>
									<option value="icon-social-youtube">youtube</option>
									<option value="icon-social-dropbox">dropbox</option>
									<option value="icon-social-vkontakte">vkontakte</option>
									<option value="icon-social-steam">steam</option>
								</select>
							</div>
							<div class="form-group">
								<label>Link</label>
								<input type="text" class="form-control" name="social_link[]" value="<?= $value['link'] ?>" >
							</div>
							<div class="form-group">
								<a href="lib/script.php?delete_social=<?= $key ?>" class="btn btn-light"><i class="icon-trash"></i> delete</a>
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
	        <h5 class="modal-title" id="exampleModalLabel">Add Social</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<label>icon</label>
	      	<select name="add_social_icon" class="form-control">
				<option value="icon-social-tumblr">tumblr</option>
				<option value="icon-social-twitter">twitter</option>
				<option value="icon-social-facebook">facebook</option>
				<option value="icon-social-instagram">instagram</option>
				<option value="icon-social-linkedin">linkedin</option>
				<option value="icon-social-pinterest">pinterest</option>
				<option value="icon-social-github">github</option>
				<option value="icon-social-google">google</option>
				<option value="icon-social-reddit">reddit</option>
				<option value="icon-social-skype">skype</option>
				<option value="icon-social-dribbble">dribbble</option>
				<option value="icon-social-behance">behance</option>
				<option value="icon-social-foursqare">foursqare</option>
				<option value="icon-social-soundcloud">soundcloud</option>
				<option value="icon-social-spotify">spotify</option>
				<option value="icon-social-stumbleupon">stumbleupon</option>
				<option value="icon-social-youtube">youtube</option>
				<option value="icon-social-dropbox">dropbox</option>
				<option value="icon-social-vkontakte">vkontakte</option>
				<option value="icon-social-steam">steam</option>
			</select>
			<br>
	      	<label>Link</label>
	      	<input type="text" class="form-control" name="add_social_link" placeholder="#" >
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