<?php
    require_once("../assets/php/db.php");

    $nom = null;
    $web = null;
    $logo = null;
    $updir = null;
    $upfile = null;
    $id = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    if(isset($_FILES['logo'])){
        $updir = dirname(dirname(dirname(__FILE__))) . '/uploads/part/';
        $upfile = $updir . basename($_FILES['logo']['name']);
        $success = move_uploaded_file($_FILES['logo']['tmp_name'], $upfile);
        
        if($success){
            if(!empty($id)){
                $logo = '/equilateral_mit/uploads/part/' . $_FILES['logo']['name'];
                $sql = "UPDATE partenaire SET logo = '$logo' WHERE id = $id";
                $uplogo = $bdd->exec($sql);
            }
            else{
                $logo = '/equilateral_mit/uploads/part/' . $_FILES['logo']['name'];
            }
        }
    }
    if($_FILES['logo']['size'] > 2097152){
        header('Location: alter.php?etat=errsize');
        exit();
    }
    
    if(isset($_POST['nom']) && !empty($_POST['nom'])){
        $nom = $_POST['nom'];
    }

    if(isset($_POST['web']) && !empty($_POST['web'])){
        $web = $_POST['web'];
    }

    $new = null;
    $update = null;

    if(!empty($id)){
            $sql = "UPDATE partenaire SET nom = '$nom', web = '$web' WHERE id = $id";
            $update = $bdd->exec($sql);
    }
    else{
        $sql = "INSERT INTO partenaire SET logo = '$logo', nom = '$nom', web = '$web'";
        $new = $bdd->exec($sql);
    }

    if($new){
        header('Location: index.php?etat=1');
        exit();
    }
    else if($update || $uplogo){
        header('Location: index.php?etat=2');
        exit();
    }
    else{
        header('Location: alter.php?etat=error');
        exit();
    }
?>