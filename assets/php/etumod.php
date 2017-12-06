<?php
    require_once("db.php");

    $mail = null;
    $mdp = null;
    $prenom = null;
    $nom = null;
    $cp = null;
    $ville = null;
    $transport = null;
    $dispo = null;
    $dispo2 = null;
    $save = null;
    $envoi = null;
    $id = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    if(isset($_POST['mail']) && !empty($_POST['mail'])){
        $mail = $_POST['mail'];
    }
    if(isset($_POST['mdp']) && !empty($_POST['mdp']) && isset($_POST['mdp2']) && !empty($_POST['mdp2'])){
        if($_POST['mdp'] == $_POST['mdp2']){
            $mdp = $_POST['mdp'];
        }
        else{
            header('Location: ../../etuperso.php?mdp=err&id='.$id);
            exit();
        }
    }
    if(isset($_POST['prenom']) && !empty($_POST['prenom'])){
        $prenom = $_POST['prenom'];
    }
    if(isset($_POST['nom']) && !empty($_POST['nom'])){
        $nom = $_POST['nom'];
    }
    if(isset($_POST['cp']) && !empty($_POST['cp'])){
        $cp = $_POST['cp'];
    }
    if(isset($_POST['ville']) && !empty($_POST['ville'])){
        $ville = $_POST['ville'];
    }
    if(isset($_POST['transport']) && !empty($_POST['transport'])){
        $transport = $_POST['transport'];
    }
    if(isset($_POST['dispo']) && !empty($_POST['dispo'])){
        $dispo = $_POST['dispo'];
    }
    if(isset($_POST['dispo2']) && !empty($_POST['dispo2'])){
        $dispo2 = $_POST['dispo2'];
    }

    if(!empty($mdp)){
        $sql = "UPDATE etudiant SET mail = '$mail', mdp = '$mdp', prenom = '$prenom', nom = '$nom', cp = '$cp', ville = '$ville', transport = '$transport', dispo = '$dispo', dispo2 = '$dispo2' WHERE id=$id";
        $save = $bdd->exec($sql);
    }
    else{
        $sql = "UPDATE etudiant SET mail = '$mail', prenom = '$prenom', nom = '$nom', cp = '$cp', ville = '$ville', transport = '$transport', dispo = '$dispo', dispo2 = '$dispo2' WHERE id=$id";
        $save = $bdd->exec($sql);
    }

    if($save){
        header('Location: ../../etuperso.php?mod=1&id='.$id);
        exit();
    }
    else{
        header('Location: ../../etuperso.php?mod=err&id='.$id);
        exit();
    }
?>