<?php
    require_once("../assets/php/db.php");

    $id = $_GET['id'];

    $sql = 'DELETE FROM entreprise WHERE id = :id';
    $prepa = $bdd->prepare($sql);
    $del = $prepa->execute(array('id' => $id));

    if($del){
        header('Location: index.php?del=1');
        exit();
    }
    else{
        header('Location: index.php?del=2');
        exit();
    }
?>
