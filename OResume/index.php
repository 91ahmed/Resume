<?php
	require_once('dashboard/lib/helper.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="OResume - Easy and Simple PHP Resume">
		<meta name="keywords" content="PHP, HTML, CSS, JavaScript">
		<meta name="author" content="Ahmed Hassan">
		<meta charset="UTF-8">
		<title><?= getData()->title ?></title>

		<!-- Google Poppins Font -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500;600;700;800;900&display=swap" rel="stylesheet">

		<!-- Simple Line Icons v2.4.0 -->
		<link rel="stylesheet" href="assets/css/simple-line-icons.css">
		<!-- Bootstrap CSS v4.3.1 -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- Main Style -->
		<link rel="stylesheet" href="assets/css/style.css">
		<?php if(getData()->direction == 'rtl'): ?>
		<link rel="stylesheet" href="assets/css/arabic.css">
		<?php endif; ?>

		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<div class="wrapper container">

			<!-- Css Loader -->
			<div class="loader-content">
				<div class="spinner"></div>
			</div>

			<!-- Navber -->	
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="<?= $_SERVER['PHP_SELF'] ?>"><?= getData()->name ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active section-about">
							<a class="nav-link" href="#about"><i class="icon-user"></i>&nbsp; <?= getData()->section_about['title'] ?> <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active section-education">
							<a class="nav-link" href="#education"><i class="icon-graduation"></i>&nbsp; <?= getData()->section_education['title'] ?> <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active section-experience">
							<a class="nav-link" href="#experience"><i class="icon-briefcase"></i>&nbsp; <?= getData()->section_experience['title'] ?> <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active section-skills">
							<a class="nav-link" href="#skills"><i class="icon-fire"></i>&nbsp; <?= getData()->section_skills['title'] ?> <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active section-portfolio">
							<a class="nav-link" href="#portfolio"><i class="icon-grid"></i>&nbsp; <?= getData()->section_portfolio['title'] ?> <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active section-achievements">
							<a class="nav-link" href="#achievements"><i class="icon-trophy"></i>&nbsp; <?= getData()->section_achievements['title'] ?> <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active section-contact">
							<a class="nav-link" href="#contact"><i class="icon-phone"></i>&nbsp; <?= getData()->section_contact['title'] ?> <span class="sr-only">(current)</span></a>
						</li>
					</ul>
				</div>
			</nav>

			<!-- Separator -->
			<div style="height: 60px;"></div>

			<!-- About Section -->
			<section id="about" class="section" data-active="<?= getData()->section_about['active'] ?>">
				<div class="row">
					<div class="col-md-3">
						<img src="dashboard/uploads/avatar/<?= getData()->image ?>" style="max-width:150px" alt="about">
					</div>
					<div class="col-md-9">
						<h2 class="mt-4 mt-md-0 mb-4" style="font-weight: 700;"><?= getData()->about_welcome ?></h2>
						<p class="mb-0"><?= getData()->about_summary ?></p>
						<div class="row my-4">
							<?php foreach(getData()->about as $value): ?>
							<div class="col-md-6">
								<p class="mb-2"><?= ucwords($value['title']) ?>: <span class="text-dark"><?= ucwords($value['details']) ?></span></p>
							</div>
							<?php endforeach; ?>
						</div>
						<a href="dashboard/uploads/cv/<?= getData()->cv ?>" target="_blank" class="btn btn-danger mr-3"><i class="icon-cloud-download"></i>&nbsp; Download CV</a>
						<a href="#contact" class="btn btn-info mt-2 mt-md-0 mt-xs-2"><i class="icon-envelope"></i>&nbsp; Hire me</a>
					</div>
				</div>
			</section>

			<!-- Education Section -->
			<section id="education" class="section" data-active="<?= getData()->section_education['active'] ?>">
				<h3 class="section-title">
					<span><i class="icon-graduation"></i></span>
					&nbsp;
					<?= getData()->section_education['title'] ?>
				</h3>
				<div style="height: 80px;"></div>

				<div class="timeline-section">
					<?php foreach(getData()->education as $value): ?>
					<div class="timeline-content">
						<div class="head">
							<span><?= $value['date'] ?></span>
						</div>
						<div class="body">
							<h4 class="mt-0"><?= $value['title'] ?></h4>
							<p><?= $value['details'] ?></p>
						</div>
					</div>
					<?php endforeach; ?>
					<span class="timeline-h-line"></span>
				</div>
			</section>

			<!-- Experience Section -->
			<section id="experience" class="section" data-active="<?= getData()->section_experience['active'] ?>">
				<h3 class="section-title">
					<span><i class="icon-briefcase"></i></span>
					&nbsp;
					<?= getData()->section_experience['title'] ?>
				</h3>
				<div style="height: 80px;"></div>

				<div class="timeline-section">
					<?php foreach(getData()->experience as $value): ?>
					<div class="timeline-content">
						<div class="head">
							<span><?= $value['date'] ?></span>
						</div>
						<div class="body">
							<h4 class="mt-0"><?= $value['title'] ?></h4>
							<p><?= $value['details'] ?></p>
						</div>
					</div>
					<?php endforeach; ?>
					<span class="timeline-h-line"></span>
				</div>
			</section>

			<!-- Skills Section -->
			<section id="skills" class="section" data-active="<?= getData()->section_skills['active'] ?>">
				<h3 class="section-title">
					<span><i class="icon-fire"></i></span>
					&nbsp;
					<?= getData()->section_skills['title'] ?>
				</h3>
				<div style="height: 80px;"></div>
				<p class="mb-0"><?= getData()->skills_summary ?></p>
				
				<div class="row mt-5">

					<?php foreach(getData()->skills as $value): ?>
					<div class="col-md-6">
						<!-- skill item -->
						<div class="skill-item">
							<div class="skill-info clearfix">
								<h4 class="float-left mb-3 mt-0" style="font-size: 14px"><?= $value['skill'] ?></h4>
								<span class="float-right"><?= $value['percentage'] ?>%</span>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="<?= $value['percentage'] ?>" style="width:<?= $value['percentage'].'%' ?>">
								</div>
							</div>
							<div class="spacer" data-height="50" style="height: 50px;"></div>
						</div>
					</div>
					<?php endforeach; ?>

				</div>
			</section>

			<!-- Portfolio Section -->
			<section id="portfolio" class="section" data-active="<?= getData()->section_portfolio['active'] ?>">
				<h3 class="section-title">
					<span><i class="icon-grid"></i></span>
					&nbsp;
					<?= getData()->section_portfolio['title'] ?>
				</h3>
				<div style="height: 80px;"></div>

				<div class="row">
					<?php foreach(getData()->portfolio as $value): ?>
					<div class="col-md-4 col-sm-6 grid-item mb-3">
						<div class="portfolio-img" style='background-image: url("dashboard/uploads/portfolio/<?= $value['image'] ?>");'>
							<div class="portfoilo-overlay">
								<a href="<?= $value['link'] ?>" target="_blank" class="portfoilo-icon"><i class="icon-link"></i></a>
							</div>
						</div>
						<h4 class="mb-0 mt-2" style="font-size: 16px"><?= $value['title'] ?></h4>
						<p><?= $value['details'] ?></p>
					</div>
					<?php endforeach; ?>

				</div>
			</section>

			<!-- Achievements Section -->
			<section id="achievements" class="section" data-active="<?= getData()->section_achievements['active'] ?>">
				<h3 class="section-title">
					<span><i class="icon-trophy"></i></span>
					&nbsp;
					<?= getData()->section_achievements['title'] ?>
				</h3>
				<div style="height: 80px;"></div>
				<div class="row">

					<?php foreach(getData()->achievements as $value): ?>
					<div class="col-md-4 col-sm-6">
						<!-- service item -->
						<div class="service-item text-center">
							<i class="<?= $value['icon'] ?> icon-simple"></i>
							<h4 class="my-3"><?= $value['title'] ?></h4>
							<p class="mb-0"><?= $value['details'] ?></p>
						</div>
						<div class="spacer" data-height="20" style="height: 20px;"></div>
					</div>
					<?php endforeach; ?>

				</div>
			</section>

			<!-- Contact Section -->
			<section id="contact" class="section" data-active="<?= getData()->section_contact['active'] ?>">
				<h3 class="section-title">
					<span><i class="icon-phone"></i></span>
					&nbsp;
					<?= getData()->section_contact['title'] ?>
				</h3>
				<div style="height: 80px;"></div>

				<div class="row">
					<div class="col-sm-4">
						<div class="contact-info mb-5">
							<i class="icon-phone"></i>
							<div class="details">
								<h4 style="font-size: 14px;">Phone</h4>
								<span><?= getData()->contact[0]['phone'] ?></span>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="contact-info mb-5">
							<i class="icon-envelope"></i>
							<div class="details">
								<h4 style="font-size: 14px;">Email address</h4>
								<span><?= getData()->contact[0]['email'] ?></span>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="contact-info">
							<i class="icon-location-pin"></i>
							<div class="details">
								<h4 style="font-size: 14px;">Location</h4>
								<span><?= getData()->contact[0]['address'] ?></span>
							</div>
						</div>
					</div>

					<div class="col-md-8" style="display: none;">
						<!-- Contact Form -->
						<form id="contact-form" class="contact-form" method="post" action="dashboard/lib/sendmail.php" novalidate="true">
							
							<div class="messages"></div>
							
							<div class="row">
								<div class="column col-md-6">
									<!-- Name input -->
									<div class="form-group">
										<input type="text" class="form-control" name="name" id="name" placeholder="Your name" required="required" data-error="Name is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								
								<div class="column col-md-6">
									<!-- Email input -->
									<div class="form-group">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email address" required="required" data-error="Email is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="column col-md-12">
									<!-- Subject input -->
									<div class="form-group">
										<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="required" data-error="Subject is required.">
										<div class="help-block with-errors"></div>
									</div>
								</div>
						
								<div class="column col-md-12">
									<!-- Message textarea -->
									<div class="form-group">
										<textarea name="message" id="message" class="form-control" rows="5" placeholder="Message" required="required" data-error="Message is required."></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-danger"><i class="icon-paper-plane"></i>&nbsp; Send Message</button><!-- Send Button -->

						</form>
						<!-- Contact Form end -->
					</div>

				</div>
			</section>

			<!-- Social icons -->
			<ul class="social-icons list-inline m-5 text-center">
				<?php foreach(getData()->social as $value): ?>
				<li class="list-inline-item">
					<a href="<?= $value['link'] ?>" target="_blank"><i class="<?= $value['icon'] ?>"></i></a>
				</li>
				<?php endforeach; ?>
			</ul>

		</div>
		<!-- End Wrapper -->

		<!-- Scroll to Top Button -->
		<a href="javascript:" class="go-to-top"><i class="icon-arrow-up"></i></a>

		<!-- JQuery v3.6.0 -->
		<script src="assets/js/jquery-v3.6.0.min.js"></script>
		<!-- Bootstrap JS v4.3.1 -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Popper v1.14.7 -->
		<script src="assets/js/popper.min.js"></script>
		<!-- Main Script -->
		<script src="assets/js/script.js"></script>
	</body>
</html>