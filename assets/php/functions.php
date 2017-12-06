<?php

require_once("assets/php/db.php");

function lire($table){
	global $bdd;
	$sql = 'SELECT * FROM'.$table;
	$req = $bdd->prepare($sql);
	$data = $req->execute();
	unset($bdd);
	
	return $data;
}

function lireJoin($table1, $table2, $index){
	global $bdd;
	$sql = "SELECT * FROM $table1 INNER JOIN $table2 AS $table1.id=$table2.$index";
	$req = $bdd->prepare($sql);
	$data = $req->execute();
	unset($bdd);
	
	return $data;
}

?>
	