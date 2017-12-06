<?php
    require_once("../assets/php/db.php");

    $intitule = null;

    if(isset($_POST['intitule']) && !empty($_POST['intitule'])){
        $intitule = $_POST['intitule'];
    }

    $id = null;
    $new = null;
    $update = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $sql = "UPDATE filiere SET intitule = '$intitule' WHERE id = $id";
        $update = $bdd->exec($sql);
    }
    else{
        $sql = "INSERT INTO filiere SET intitule = '$intitule'";
        $new = $bdd->exec($sql);
    }

    if($new){
        header('Location: index.php?etat=1');
        exit();
    }
    else if($update){
        header('Location: index.php?etat=2');
        exit();
    }
    else{
        header('Location: alter.php?etat=error');
        exit();
    }
?>
