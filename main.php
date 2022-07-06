<?php 
$_PAGE_NAME = "Magyar Termelői Méz"; # így helyesen vagn írva???
$_TITLE = "Mézeink"; 
$page_number = 1;
require_once "modules/header.php";
?>

	<section class="first-section">
		<div class="cards">
			<div class="card">
				<img src="images\honey\IMG_20220704_145412.jpg" alt="méz">
				<div class="content">
					<h1><?php echo $mez1_name; ?></h1>
					<p>3000 Ft/kg</p>					
				</div>
			</div>
			<div class="card">
				<img src="images\honey\IMG_20220704_145420.jpg" alt="méz">
				<div class="content">
					<h1><?php echo $mez1_name; ?></h1>
					<p>3000 Ft/kg</p>					
				</div>
			</div>
			<div class="card">
				<img src="images\honey\IMG_20220704_150130.jpg" alt="méz">
				<div class="content">
					<h1><?php echo $mez1_name; ?></h1>
					<p>3000 Ft/kg</p>					
				</div>
			</div>
			<div class="card">
				<img src="images\honey\IMG_20220704_150320.jpg" alt="méz">
				<div class="content">
					<h1><?php echo $mez1_name; ?></h1>
					<p>3000 Ft/kg</p>					
				</div>
			</div>
		</div>
	</section>

<?php require_once "modules/footer.php"; ?>