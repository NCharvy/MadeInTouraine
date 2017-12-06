<?php
    require_once("db.php");

    // Variables qui va récupérer les données du formulaire
    $mail = null; 
    $mdp = null;

    // On teste si le formulaire a bien été rempli, et on récupère les données grâces aux variables qu'on a initialisé avant
    if($_POST){
        if(isset($_POST['mail'])){
            $mail = $_POST['mail'];
        }
        if(isset($_POST['mdp'])){
            $mdp = sha1($_POST['mdp']);
        }
    }

    $sql = "SELECT * FROM etudiant WHERE mail = '$mail' AND mdp = '$mdp'";
    $req = $bdd->query($sql);
    $result = $req->fetch(PDO::FETCH_OBJ);
    
    if(($result->mail == $mail) && ($result->mdp == $mdp)){
        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['prenom'] = $result->prenom;
        
        header('Location: ../../etuperso.php?id='.$result->id);
        exit();
    }
    // Sinon, on redirige vers la page de connexion avec un message d'erreur
    else{
        header('Location: ../../co.php?error=1');
        exit();
    } 
?>