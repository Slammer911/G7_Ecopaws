<?php 
try{
	$bdd=new PDO("mysql:host=localhost;dbname=animalerie;","root","");
}
catch (exception $e) {

	die("Erreur de connexion".$e->getMessage());

}
?>