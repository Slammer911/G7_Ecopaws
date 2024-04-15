<?php 
require("connexion.php");

try{
	$bdd-> exec("DELETE FROM panier WHERE id = '".$_POST['id']."';");
		header("Location:panier.php?delete");;
	}catch(Exception $e){
		echo "Echec ajout".$e -> getMessage();
	}

 ?>