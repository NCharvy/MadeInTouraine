<?php

    $code = null; 
    define("TRUE_CODE", "02971b3105bb3ab555e0fc72d41675976fd816bd");

    // On teste si le formulaire a bien été rempli, et on récupère les données grâces aux variables qu'on a initialisé avant
    if($_POST){
        if(isset($_POST['code'])){
            $code = sha1($_POST['code']);
        }
    }
    
    if($code == TRUE_CODE){
        session_start();
        $_SESSION['logged'] = true;
        
        header('Location: ../../cvtheque.php');
        exit();
    }
    // Sinon, on redirige vers la page de connexion avec un message d'erreur
    else{
        header('Location: ../../logcvtheque.php?error=1');
        exit();
    } 
?>