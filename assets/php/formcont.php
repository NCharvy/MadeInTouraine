<?php
    require_once("db.php");
    
    $pseudo = null;
    $sujet = null;
    $contenu = null;
    $mail = null;
    $envoi = null;
    $save = null;

    if(isset($_POST['pseudo']) && !empty($_POST['pseudo'])){
        $pseudo = $_POST['pseudo'];
    }
    if(isset($_POST['objet']) && !empty($_POST['objet'])){
        $sujet = $_POST['objet'];
    }
    if(isset($_POST['message']) && !empty($_POST['message'])){
        $contenu = $_POST['message'];
    }
    if(isset($_POST['email']) && !empty($_POST['email'])){
        $mail = $_POST['email'];
    }

    $headers = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/plain; charset=iso-8859-1";
    $headers[] = "From: Made in Touraine <nathan.charvy@gmail.com>";
    $headers[] = "To: {$pseudo} <{$mail}>";
    $headers[] = "Subject: {$sujet}";
    $headers[] = "X-Mailer: PHP/".phpversion();

    $envoi = mail($mail, $sujet, $contenu, implode("\r\n", $headers));

    if($envoi){
        header('Location: ../../contact.php?etat=1');
        exit();
    }
    else{
        $sql = "INSERT INTO contact SET pseudo = '$pseudo', sujet = '$sujet', contenu = '$contenu', mail = '$mail'";
        $save = $bdd->exec($sql);
        
        header('Location: ../../contact.php?etat=2');
        exit();
    }
?>