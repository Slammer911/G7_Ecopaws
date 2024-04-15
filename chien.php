<?php 
session_start();
include 'navigation.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>catégorie chien</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_categ.css">
	<meta charset="utf-8">
</head>
<body>
	<header>
		
	</header>

	<!-- La PARTIE DES PRODUITS -->
	<div>
		<p class="meuilleur">Nous Sélectionnons le meuilleur pour votre CHIEN</p>

		<div class="divproduits">

			<div style="grid-area: produit1;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;">
				<a href="produit_chien1.php">
					<div style="text-align:center;">
						<img src="image/Produits/chien1.jpg" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> CHIEN </span> <br>
							<span class="txt2"><a href="" class="txt2">NEKTON Dog Naturel plus 100 g</a></span>
						</p>
						<p class="txt3">24 CAD</p>
					</div>
				</a>
			</div>

			<div style="grid-area: produit2;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;width:35vw;">
				<a href="produit_chien2.php">
					<div style="text-align:center;">
						<img src="image/Produits/chien2.jpg" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> CHIEN </span> <br>
							<span class="txt2"><a href="produit_chien2.php" class="txt2">Royal canin Berger Allemand 16KG </a></span>
						</p>
						<p class="txt3">12,99 CAD</p>
					</div>
				</a>
			</div>


			<div style="grid-area: produit3;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;">
				<a href="produit_chien3.php">
					<div style="text-align: center;">
						<img src="image/Produits/chien3.jpg" style="max-width: 200px; max-height:2100px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> CHIEN </span> <br>
							<span class="txt2"><a href="" class="txt2">Royal Canin maxi puppy 15 Kg </a></span>
						</p>
						<p class="txt3">12,99 CAD</p>
					</div>
				</a>
			</div>


			<div style=" grid-area: produit4;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;width:35vw;">
				<a href="produit_chien4.php">									
					<div style="text-align:center;">
						<img src="image/Produits/chien4.jpg" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> CHIEN </span> <br>
							<span class="txt2"><a href="" class="txt2">Niche en plastique pour chiens IMAC </a></span>
						</p>
						<p class="txt3">80 CAD</p>
					</div>
				</a>
			</div>


			<div style=" grid-area: produit5;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;position: relative;right: 75%; width: 35vw;">
				<a href="produit_chien5.php">	
					<div style="text-align:center;">
						<img src="image/Produits/chien5.png" style="max-width: 200px; max-height: 180px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> CHIEN </span> <br>
							<span class="txt2"><a href="" class="txt2">Meradog croquettes pour chien Adult 15 Kg</a></span>
						</p>
						<p class="txt3">54,99 CAD</p>
					</div>
				</a>
			</div>



		</div>
	</div>
	<!-- Footer -->
	<?php include("footer.php"); ?>

		</nav>
	</body>
	</html>