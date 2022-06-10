<!DOCTYPE html>

<?php
$_PAGE_NAME = "MÉHÉSZ";

$honey1 = "Akác méz";
$image_src_1 = "images/akac.jpg";
$price1 = 3000;

$quantitiy = 2;

$honey2 = "Akác méz";
$image_src_2 = "images/akac.jpg";
$honey3 = "Akác méz";
$image_src_3 = "images/akac.jpg";
?>

<html lang="hu">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_PAGE_NAME; ?></title>

	<meta charset="utf-8">
	<link rel="icon" href="images/logo_title.jpg" />
	<meta name="keywords" content="méz, termelői méz, háziméz">
	<meta name="description" content="Hazai termelői mézek. Akác méz, vegyesvirág méz, repce méz.">
	<meta name="author" content="Kristóf Péter Cseh">
	
	<link rel="stylesheet" href="style.css">
  </head>
  <body>
  	<header>
		<img src="images/logo.jpg" width="500">
		<nav>
			<ul class="nav_links">
				<li><a href="#">Méz</a></li>
				<li><a href="#">Elérhetőség</a></li>
				<li><a href="#">Bejelentkezés</a></li>
				<li><a href="#">Regisztráció</a></li>
			</ul>
		</nav>
		<h1>CSEH MÉHÉSZET</h1>
	</header>

	
	<section>
		<h2>Rendelések</h2>
		<div>
			<span>TERMÉK</span>
			<span>ÁR</span>
			<span>TERMÉK</span>
		</div>
		<div>
			<strong> <?php echo $honey1; ?> </strong>
			<img src="<?php echo  $image_src_1; ?>" 
				alt="méz" width="200">
			<div>
				<span> <?php echo  $price1; ?> </span>
				<span> Ft</span>
				<span> <?php echo $quantitiy; ?> </span>
				<span>db</span>
				<button role="button">ELTÁVOLÍTÁS</button> 
			</div>
		</div>
		<hr>
		<div>
			<strong>ÖSSZEG</strong>
			<span>999 Ft</span>
		</div>
	</section>
	

	<footer>
		<h3>Kapcsolat</h3>
		<ul>
			<li>telefon szám: +36 30 621 2193</li>
			<li>email cim: asd@email.com</li>
		</ul>
	</footer>
  </body>
</html>