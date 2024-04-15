<?php 
require("connexion.php");

try{
		header("Location:panier.php?ajoute");
	}catch(Exception $e){
		echo "Echec ajout".$e -> getMessage();
	}

 ?>