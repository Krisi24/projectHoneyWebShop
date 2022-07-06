<!DOCTYPE html>

<?php
$mez1_name = "Akác méz";
$id_active = 'id="active"';
if (!$page_number) $page_number = 0;
?>

<html lang="hu">
  <head>
	<!-- web tab -->
    <meta charset="utf-8">
    <title><?php echo $_TITLE; ?></title>
	<link rel="icon" type="image/jpg"  href="images/logo.jpg" />
	<!-- meta data -->
	<meta name="keywords" content="méz, méz árak, termelői méz, házi méz, házi mézes">
	<meta name="description" content="Hazai termelői méz. Akác méz, vegyesvirág méz, repce méz.">
	<meta name="author" content="Kristóf Péter Cseh">
	<!-- stylesheets - css -->
	<link rel="stylesheet" type="text/css" href="styles/animations.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/card.css">
  </head>
<body>
	<div class="starting-section">
		<nav>
			<h1><?php echo $_PAGE_NAME; ?></h1>
			<ul class="nav_links">
				<li><a href="main.php"	<?php if($page_number == 1) echo $id_active; ?>>Mézeink</a></li>
				<li><a href="meheszet.php" <?php if($page_number == 2) echo $id_active; ?>>Méhészet</a></li>
			</ul>
		</nav>
	</div>