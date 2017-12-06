<?php

	$host = 'localhost';
	$dbname = 'bddequilateral';
	$user = 'root';
	$pass = 'root';
	
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);
	
	try{
		$bdd = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, $options);
	} catch(Exception $e){
		die('Erreur lors de la connexion à la base de données !');
	}
	
?>