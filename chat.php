<?php 
session_start(); 
include 'navigation.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>catégorie chat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style_categ.css">
	<meta charset="utf-8">
</head>
<body>
	<header>
		
	</header>

	<!-- La PARTIE DES PRODUITS -->
	<div>
		<p class="meuilleur">Nous Sélectionnons le meuilleur pour votre chat</p>

		<div class="divproduits">

			<div style="grid-area: produit1;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;">
				<a href="produit_chat1.php">
					<div style="text-align:center;">
						<img src="image/Produits/chat1.jpg" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> CHATS </span> <br>
							<span class="txt2"><a href="" class="txt2">Arbre à chat Josefa</a></span>
						</p>
						<p class="txt3">45 CAD</p>
					</div>
				</a>
			</div>

			<div style="grid-area: produit2;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;width:35vw;">
				<a href="produit_chat2.php">
					<div style="text-align:center;">
						<img src="image/Produits/chat2.png" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> CHATS </span> <br>
							<span class="txt2"><a href="" class="txt2">Friskies croquette</a></span>
						</p>
						<p class="txt3">64 CAD</p>
					</div>
				</a>
			</div>


			<div style="grid-area: produit3;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;">
				<a href="produit_chat3.php">
					<div style="text-align: center;">
						<img src="image/Produits/chat3.jpg" style="max-width: 200px; max-height:2100px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> CHATS </span> <br>
							<span class="txt2"><a href="" class="txt2">Croquette Whiskas 1.4 Kg Poulet </a></span>
						</p>
						<p class="txt3">15 CAD</p>
					</div>
				</a>
			</div>


			<div style=" grid-area: produit4;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;width:35vw;">
				<a href="produit_chat4.php">									
					<div style="text-align:center;">
						<img src="image/Produits/chat4.jpg" style="max-width: 200px; max-height: 200px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> CHATS </span> <br>
							<span class="txt2"><a href="" class="txt2">Purina One Delicate 1.5 Kg Saumon </a></span>
						</p>
						<p class="txt3">22 CAD</p>
					</div>
				</a>
			</div>


			<div style=" grid-area: produit5;border-radius: 20px;box-shadow:1px 1px 1px 1px grey;position: relative;right: 75%; width: 35vw;">
				<a href="produit_chat5.php">	
					<div style="text-align:center;">
						<img src="image/Produits/chat5.jpg" style="max-width: 200px; max-height: 180px;">
					</div>

					<div style="text-align:center;">
						<p> <span class="txt1"> CHATS </span> <br>
							<span class="txt2"><a href="" class="txt2">Cage de transport italienne pour chat – IMAC </a></span>
						</p>
						<p class="txt3">38 CAD</p>
					</div>
				</a>
			</div>



		</div>
	</div>

	<?php include 'footer.php'; ?>

		</nav>
	</body>
	</html>