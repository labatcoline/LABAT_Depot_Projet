<?php 
/* Connexion à la base de données WNBB */
try{
	$bd = new PDO('mysql:host='*****';dbname=php;charset=utf8','*****','*****');
} catch (exception $e) {
	die ('Erreur : '.$e->getMessage());
}
?>