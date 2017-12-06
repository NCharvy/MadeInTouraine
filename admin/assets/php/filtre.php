<?php
    require_once("db.php");

    $id_f = null;

    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id_f = $_POST['id'];
    }

    header('Location: ../../exposants.php?id='.$id_f);
<?
