<?php
    require_once("db.php");

    // Variables qui va récupérer les données du formulaire
    $pseudo = null; 
    $pass = null;

    // On teste si le formulaire a bien été rempli, et on récupère les données grâces aux variables qu'on a initialisé avant
    if($_POST){
        if(isset($_POST['pseudo'])){
            $pseudo = $_POST['pseudo'];
        }
        if(isset($_POST['pass'])){
            $pass = sha1($_POST['pass']);
        }
    }

    // Requête préparée, sert à sécuriser les données
    $sql = "SELECT * FROM user WHERE pseudo = '$pseudo' AND pass = '$pass'";
    $req = $bdd->query($sql);
    $result = $req->fetch(PDO::FETCH_OBJ);
    
    // On teste si la requête a retourné un résultat avec rowCount, si c'est le cas on redirige vers le back-office
    if(($result->pseudo == $pseudo) && ($result->pass == $pass)){
        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['pseudo'] = $pseudo;
        
        header('Location: ../../index.php');
        exit();
    }
    // Sinon, on redirige vers la page de connexion avec un message d'erreur
    else{
        header('Location: ../../admin.php?error=1');
        exit();
    } 
?>