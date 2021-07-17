<?php 
	require_once('layout/header.php');
	require_once('layout/navbar.php');
?>

	<div style="height: 60px;"></div>

	<section class="section">
		<h3 class="section-title">Basic Setting.</h3>
		<div style="height: 80px;"></div>

		<div class="row">
			<div class="col-12">
				<form method="POST" action="lib/script.php" enctype="multipart/form-data">
					
					<div class="row">

						<!-- Upload Your CV File -->
						<div class="column col-12">
							<div class="form-group">
								<label>Your Cv <small>(should be PDF or DOC)</small></label>
								<input type="hidden" name="old_cv" value="<?= getData()->cv ?>" >
								<input type="file" class="form-control" name="cv">
								<?php if(!empty(getData()->cv)): ?>
								<a href="uploads/cv/<?= getData()->cv ?>" target="_blank" class="btn btn-info mb-3 mt-3" style="font-size: 13px">Preview CV</a>
								<?php endif; ?>
							</div>
						</div>

						<!-- Your Name -->
						<div class="column col-12">
							<div class="form-group">
								<label>Your Name</label>
								<input type="text" class="form-control" name="name" placeholder="Your name" value="<?= getData()->name ?>">
							</div>
						</div>
						
						<!-- Site Title -->
						<div class="column col-12">
							<div class="form-group">
								<label>Site Title</label>
								<input type="text" class="form-control" name="title" placeholder="Site Title" value="<?= getData()->title ?>">
							</div>
						</div>

						<!-- Site Direction -->
						<div class="column col-12">
							<div class="form-group">
								<label>Site Direction</label>
								<div class="form-group">
									<select class="form-control" name="direction">
										<option value="<?= getData()->direction ?>" selected><?= strtoupper(getData()->direction) ?></option>
										<option value="ltr">LTR</option>
										<option value="rtl">RTL</option>
									</select>
								</div>
							</div>
						</div>

						<!-- Sections -->
						<div class="column col-12">
							<div class="form-group">
								<label>Sections</label>

								<div class="card mb-2">
									<div class="card-header">
										<h4><?= getData()->section_about['title'] ?></h4>
									</div>
									<div class="card-body form-row">
										<div class="col">
											<label>Title</label>
											<input type="text" class="form-control" name="section_about_title" value="<?= getData()->section_about['title'] ?>" >
										</div>
										<div class="col">
											<label>Active</label>
											<select class="form-control" name="section_about_active">
												<option value="<?= getData()->section_about['active'] ?>" selected>
													<?= getData()->section_about['active'] ?>
												</option>
												<option value="notactive">not active</option>
												<option value="active">active</option>
											</select>
										</div>
									</div>
								</div>

								<div class="card mb-2">
									<div class="card-header">
										<h4><?= getData()->section_education['title'] ?></h4>
									</div>
									<div class="card-body form-row">
										<div class="col">
											<label>Title</label>
											<input type="text" class="form-control" name="section_education_title" value="<?= getData()->section_education['title'] ?>" >
										</div>
										<div class="col">
											<label>Active</label>
											<select class="form-control" name="section_education_active">
												<option value="<?= getData()->section_education['active'] ?>" selected>
													<?= getData()->section_education['active'] ?>
												</option>
												<option value="notactive">not active</option>
												<option value="active">active</option>
											</select>
										</div>
									</div>
								</div>

								<div class="card mb-2">
									<div class="card-header">
										<h4><?= getData()->section_experience['title'] ?></h4>
									</div>
									<div class="card-body form-row">
										<div class="col">
											<label>Title</label>
											<input type="text" class="form-control" name="section_experience_title" value="<?= getData()->section_experience['title'] ?>" >
										</div>
										<div class="col">
											<label>Active</label>
											<select class="form-control" name="section_experience_active">
												<option value="<?= getData()->section_experience['active'] ?>" selected>
													<?= getData()->section_experience['active'] ?>
												</option>
												<option value="notactive">not active</option>
												<option value="active">active</option>
											</select>
										</div>
									</div>
								</div>

								<div class="card mb-2">
									<div class="card-header">
										<h4><?= getData()->section_skills['title'] ?></h4>
									</div>
									<div class="card-body form-row">
										<div class="col">
											<label>Title</label>
											<input type="text" class="form-control" name="section_skills_title" value="<?= getData()->section_skills['title'] ?>" >
										</div>
										<div class="col">
											<label>Active</label>
											<select class="form-control" name="section_skills_active">
												<option value="<?= getData()->section_skills['active'] ?>" selected>
													<?= getData()->section_skills['active'] ?>
												</option>
												<option value="notactive">not active</option>
												<option value="active">active</option>
											</select>
										</div>
									</div>
								</div>

								<div class="card mb-2">
									<div class="card-header">
										<h4><?= getData()->section_portfolio['title'] ?></h4>
									</div>
									<div class="card-body form-row">
										<div class="col">
											<label>Title</label>
											<input type="text" class="form-control" name="section_portfolio_title" value="<?= getData()->section_portfolio['title'] ?>" >
										</div>
										<div class="col">
											<label>Active</label>
											<select class="form-control" name="section_portfolio_active">
												<option value="<?= getData()->section_portfolio['active'] ?>" selected>
													<?= getData()->section_portfolio['active'] ?>
												</option>
												<option value="notactive">not active</option>
												<option value="active">active</option>
											</select>
										</div>
									</div>
								</div>

								<div class="card mb-2">
									<div class="card-header">
										<h4><?= getData()->section_contact['title'] ?></h4>
									</div>
									<div class="card-body form-row">
										<div class="col">
											<label>Title</label>
											<input type="text" class="form-control" name="section_contact_title" value="<?= getData()->section_contact['title'] ?>" >
										</div>
										<div class="col">
											<label>Active</label>
											<select class="form-control" name="section_contact_active">
												<option value="<?= getData()->section_contact['active'] ?>" selected>
													<?= getData()->section_contact['active'] ?>
												</option>
												<option value="notactive">not active</option>
												<option value="active">active</option>
											</select>
										</div>
									</div>
								</div>


								<div class="card mb-2">
									<div class="card-header">
										<h4><?= getData()->section_achievements['title'] ?></h4>
									</div>
									<div class="card-body form-row">
										<div class="col">
											<label>Title</label>
											<input type="text" class="form-control" name="section_achievements_title" value="<?= getData()->section_achievements['title'] ?>" >
										</div>
										<div class="col">
											<label>Active</label>
											<select class="form-control" name="section_achievements_active">
												<option value="<?= getData()->section_achievements['active'] ?>" selected>
													<?= getData()->section_achievements['active'] ?>
												</option>
												<option value="notactive">not active</option>
												<option value="active">active</option>
											</select>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>

					<!-- Update Button -->
					<button type="submit" class="btn btn-danger">Update</button>

				</form>
				
			</div>

		</div>
	</section>

<?php 
	require_once('layout/footer.php');
?>