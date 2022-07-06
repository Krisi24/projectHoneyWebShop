<!DOCTYPE html>

<?php
define("DAY_IN_MILSEC", 86400);

$id_active = 'id="active"';
if (!$page_number) $page_number = 0;


session_start();
// counting visits

$_SESSION['visit_number'] = file_get_contents("user_data/visits.txt");
$file = fopen("user_data/visits.txt", "w");
fwrite($file,$_SESSION['visit_number'] + 1);
fclose($file);

// cookies
setcookie("user", "user", time() + (DAY_IN_MILSEC * 90));
if (empty($_COOKIE["user"])) {
	$visitors_number = file_get_contents("user_data/visitors.txt");
	$file = fopen("user_data/visitors.txt", "w");
	fwrite($file, $visitors_number + 1);
	fclose($file);
}

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
				<li><a href="info.php" <?php if($page_number == 2) echo $id_active; ?>>Információk</a></li>
			</ul>
		</nav>
	</div>