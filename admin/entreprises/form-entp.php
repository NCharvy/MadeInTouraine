<?php
    require_once("../assets/php/db.php");
    
    $logo = null;
    $raison = null;
    $siret = null;
    $ape = null;
    $domaine = null;
    $adresse = null;
    $complement = null;
    $ville = null;
    $cp = null;
    $salaries = null;
    $web = null;
    $mail = null;
    $id_f = null;
    $updir = null;
    $upfile = null;
    $id = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    if(isset($_FILES)){
        $updir = dirname(dirname(dirname(__FILE__))) . '/uploads/entp/';
        $upfile = $updir . basename($_FILES['logo']['name']);
        $success = move_uploaded_file($_FILES['logo']['tmp_name'], $upfile);
        
        if($success){
            if(!empty($id)){
                $logo = '/equilateral_mit/uploads/entp/' . $_FILES['logo']['name'];
                $sql = "UPDATE entreprise SET logo = '$logo' WHERE id = $id";
                $uplogo = $bdd->exec($sql);
            }
            else{
                $logo = '/equilateral_mit/uploads/entp/' . $_FILES['logo']['name'];
            }
        }
    }
    if($_FILES['logo']['size'] > 2097152){
        header('Location: alter.php?etat=errsize');
        exit();
    }

    if(isset($_POST['raison']) && !empty($_POST['raison'])){
        $raison = $_POST['raison'];
    }
    if(isset($_POST['siret']) && !empty($_POST['siret'])){
        $siret = $_POST['siret'];
    }
    if(isset($_POST['ape']) && !empty($_POST['ape'])){
        $ape = $_POST['ape'];
    }
    if(isset($_POST['domaine']) && !empty($_POST['domaine'])){
        $domaine = $_POST['domaine'];
    }
    if(isset($_POST['adresse']) && !empty($_POST['adresse'])){
        $adresse = $_POST['adresse'];
    }
    if(isset($_POST['complement']) && !empty($_POST['complement'])){
        $complement = $_POST['complement'];
    }
    if(isset($_POST['ville']) && !empty($_POST['ville'])){
        $ville = $_POST['ville'];
    }
    if(isset($_POST['cp']) && !empty($_POST['cp'])){
        $cp = $_POST['cp'];
    }
    if(isset($_POST['salaries']) && !empty($_POST['salaries'])){
        $salaries = $_POST['salaries'];
    }
    if(isset($_POST['web']) && !empty($_POST['web'])){
        $web = $_POST['web'];
    }
    if(isset($_POST['mail']) && !empty($_POST['mail'])){
        $mail = $_POST['mail'];
    }
    if(isset($_POST['id_f']) && !empty($_POST['id_f'])){
        $id_f = $_POST['id_f'];
    }

    $new = null;
    $update = null;

    if(!empty($id)){
        $sql = "UPDATE entreprise SET raison = '$raison', siret = '$siret', ape = '$ape', domaine = '$domaine', adresse = '$adresse', complement = '$complement', ville = '$ville', cp = '$cp', salaries = '$salaries', web = '$web', mail = '$mail', id_filiere = '$id_f' WHERE id = $id";
        $update = $bdd->exec($sql);
    }
    else{   
        $sql = "INSERT INTO entreprise SET logo = '$logo', raison = '$raison', siret = '$siret', ape = '$ape', domaine = '$domaine', adresse = '$adresse', complement = '$complement', ville = '$ville', cp = '$cp', salaries = '$salaries', web = '$web', mail = '$mail', id_filiere = '$id_f'";
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