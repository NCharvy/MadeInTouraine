<?php
    session_start();
    
    if(!isset($_SESSION['logged']) || ($_SESSION['logged'] !== true)){
        header('Location: admin.php');
        exit();
    }
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Admin | MiT</title>
        <meta name="description" content="Page d'administration du site Made in Touraine" />
        <link rel="stylesheet" href="/equilateral_mit/admin/assets/css/styles.css" />
        <link rel="stylesheet" href="/equilateral_mit/admin/assets/font-awesome-4.3.0/css/font-awesome.min.css" />
    </head>
    <body>
        <header class="head-back">
            <div class="cont-headb clearfix">
                <span style="color : #eee;">Bienvenue, <span style="color : red;"><?php echo $_SESSION['pseudo']; ?></span></span>
                <a href="/equilateral_mit/admin/assets/php/unlog.php"><b>X</b> Deconnexion</a>
            </div>
        </header>