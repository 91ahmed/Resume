<?php 
	require_once('layout/header.php');
	require_once('layout/navbar.php');
?>

	<div style="height: 60px;"></div>

	<section class="section">
		<h3 class="section-title">Contact</h3>
		<div style="height: 80px;"></div>

		<div class="row">
			<div class="col-12">
				<form method="POST" action="lib/script.php">
					
					<div class="row">
						<div class="column col-12">
							<div class="form-group">
								<label>E-mail</label>
								<input type="email" class="form-control" name="contact_email" value="<?= getData()->contact[0]['email'] ?>">
							</div>
						</div>
						
						<div class="column col-12">
							<div class="form-group">
								<label>Phone</label>
								<input type="text" class="form-control" name="contact_phone" value="<?= getData()->contact[0]['phone'] ?>">
							</div>
						</div>

						<div class="column col-12">
							<div class="form-group">
								<label>Address</label>
								<input type="text" class="form-control" name="contact_address" value="<?= getData()->contact[0]['address'] ?>">
							</div>
						</div>

					</div>

					<button type="submit" class="btn btn-danger">Update</button><!-- Update Button -->

				</form>
				
			</div>

		</div>
	</section>

<?php 
	require_once('layout/footer.php');
?>