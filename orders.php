<?php
 require_once "modules/header.php";


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
			<div>
				<button>Rendelés leadása</button>
			</div>
		</section>

		<?php require_once "modules/footer.php"; ?>