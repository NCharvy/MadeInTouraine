<?php

class User{
	public $id;
	public $pseudo;
	public $pass;
	
	public function __construct($id, $pseudo, $pass){
		$this->id = $id;
		$this->pseudo = $pseudo;
		$this->pass = $pass;
	}
	
	public function readUser($pseudo, $pass){
		$sql = 'SELECT * FROM user_back WHERE pseudo='.$pseudo.' AND pass='.$pass;
		$req = $bdd->prepare($sql);
		$userback = $req->execute();
		
		return $userback;
	}
}
?>