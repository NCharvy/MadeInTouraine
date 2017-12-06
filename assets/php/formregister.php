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

    if(isset($_POST['mail']) && !empty($_POST['mail'])){
        $mail = $_POST['mail'];
    }
    if(isset($_POST['mdp']) && !empty($_POST['mdp']) && isset($_POST['mdp2']) && !empty($_POST['mdp2'])){
        if($_POST['mdp'] == $_POST['mdp2']){
            $mdp = sha1($_POST['mdp']);
        }
        else{
            header('Location: ../../inscription.php?mdp=err');
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

    $sql = "INSERT INTO etudiant SET mail = '$mail', mdp = '$mdp', prenom = '$prenom', nom = '$nom', cp = '$cp', ville = '$ville', transport = '$transport', dispo = '$dispo', dispo2 = '$dispo2'";
    $save = $bdd->exec($sql);

    if($save){
        /*$sujet = "Félicitations pour votre inscription, $prenom !";
        $contenu = "Bonjour, $prenom $nom ! \n\r Votre inscription à <a href=\"www.etudiant-madeintouraine.com\">Etudiant Made in Touraine</a> a été enregistrée. Vous trouverez ci-dessous vos informations de connexion. \n\r Adresse mail : $mail \n\r Mot de passe : $mdp \n\r A bientôt !";
        
        $headers = array();
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Content-type: text/plain; charset=iso-8859-1";
        $headers[] = "From: Made in Touraine <nathan.charvy@gmail.com>";
        $headers[] = "To: {$prenom} <{$mail}>";
        $headers[] = "Subject: Félicitations pour votre inscription, {$prenom} !";
        $headers[] = "X-Mailer: PHP/".phpversion();

        $envoi = mail($mail, $sujet, $contenu, implode("\r\n", $headers));*/
        
        header('Location: ../../co.php?register=1');
        exit();
    }
    else{
        header('Location: ../../inscription.php?register=2');
        exit();
    }
?>