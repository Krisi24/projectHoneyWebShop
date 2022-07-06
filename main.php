<?php 
$_PAGE_NAME = "Magyar Termelői Méz"; # így helyesen vagn írva???
$_TITLE = "Mézeink"; 
$page_number = 1;

$mez1_name = "Akác";
$mez2_name = "Repce";
$mez3_name = "Napraforgó";
$mez4_name = "Vegyes virág";

$mez1_price = 3000;
$mez2_price = 2500;
$mez3_price = 2500;
$mez4_price = 2500;

require_once "modules/header.php";
?>

	<section class="first-section">
		<div class="cards">
			<div class="card">
				<img src="images\honey\akac.jpg" alt="méz">
				<div class="content">
					<h1><?php echo $mez1_name; ?></h1>
					<p><?php echo (string)$mez1_price; ?> Ft/kg</p>					
				</div>
			</div>
			<div class="card">
				<img src="images\honey\repce.jpg" alt="méz">
				<div class="content">
					<h1><?php echo $mez2_name; ?></h1>
					<p><?php echo (string)$mez2_price; ?> Ft/kg</p>					
				</div>
			</div>
			<div class="card">
				<img src="images\honey\napraforgo.jpg" alt="méz">
				<div class="content">
					<h1><?php echo $mez3_name; ?></h1>
					<p><?php echo (string)$mez3_price; ?> Ft/kg</p>					
				</div>
			</div>
			<div class="card">
				<img src="images\honey\vegyes_virag.jpg" alt="méz">
				<div class="content">
					<h1><?php echo $mez4_name; ?></h1>
					<p><?php echo (string)$mez4_price; ?> Ft/kg</p>					
				</div>
			</div>
		</div>
	</section>

<?php require_once "modules/footer.php"; ?>