<!DOCTYPE html>
<html>
<head>
	<style>
	@import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap');
	</style> 
	<link rel="stylesheet" href="style.css" />
	<meta charset="utf-8">
	<title></title>
</head>
	<body>

		<header>
			<nav id="banner">
				<?php include("php/menu.php"); ?>
			</nav>
		</header>

		<main>
			<section>
			<?php include("php/accueil.php"); ?>
			<br>
			
			</section>
		</main>
			<section class="apropos">
				<br>
				<?php include("php/apropos.php"); ?>
			</section>
			<section class="compétences">
				<?php include("php/competences.php"); ?>
			</section>

</body>
</html>