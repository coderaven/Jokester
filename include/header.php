<!doctype html>
<html>
	<head>
		<title>Jokester</title>
		<!-- Controls how files will be included based on the current url -->
		<?php if ($_SERVER['PHP_SELF'] != '/jokester/index.php'){ include '../include/config.php';?>
			<link rel="stylesheet" href="../css/style.css">
		<?php } else { ?>
		 	<link rel="stylesheet" href="./css/style.css">
		<?php include 'include/config.php';} ?>
	</head>

	<body>
		<div id="wrap">
			<header>
				<div class="logo">Jokester</div>
				<nav class="topnav">
					<ul>
						<li><a href="<?php echo $HOME_URL ?>">Home</a></li>
						<li><a href="#">Browse Jokes</a></li>
						<li><a href="#">Random Joke</a></li>
						<li><a href="<?php echo $HOME_URL ?>/submit/">Submit Joke</a></li>
					</ul>
				</nav>
			</header>