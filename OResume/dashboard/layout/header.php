<?php
	require_once('lib/helper.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="OResume - Easy and Simple PHP Resume">
		<meta name="keywords" content="PHP, HTML, CSS, JavaScript">
		<meta name="author" content="Ahmed Hassan">
		<meta charset="UTF-8">
		<title>
			<?php
				// Get Current Page
				$page = basename($_SERVER['PHP_SELF']);
				$page = explode('.', $page);
				$page = $page[0];

				if ($page == 'index') {
					$page = '';
				} else {
					$page = '| '.ucwords($page);
				}

				echo 'Dashboard '.$page;
			?>
		</title>

		<!-- Google Poppins Font -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;500;600;700;800;900&display=swap" rel="stylesheet">

		<!-- Simple Line Icons v2.4.0 -->
		<link rel="stylesheet" href="../assets/css/simple-line-icons.css">
		<!-- Bootstrap CSS v4.3.1 -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<!-- Main Style -->
		<link rel="stylesheet" href="../assets/css/style.css">
		
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