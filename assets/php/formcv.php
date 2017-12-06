<?php
    require_once("db.php");

    $libelle = null;
    $chemin = null;
    $updir = null;
    $upfile = null;
    $contrat = null;
    $id_f = null;
    $id_etu = null;
    $new = null;

    if(isset($_GET['id_etu'])){
        $id_etu = $_GET['id_etu'];
    }

    if(isset($_POST['id_f'])){
        $id_f = $_POST['id_f'];
        
        /*$sql = 'SELECT * FROM entreprise WHERE id_filiere='.$id_f;
        $req = $bdd->query($sql);
        $entpFil = $req->fetchAll(PDO::FETCH_OBJ);
        
        foreach($entpFil as $ef){
            $sujet = "$ef->raison, un étudiant a déposé un CV vous concernant !";
            $contenu = "Bonjour, $ef->raison ! \n\r L'étudiant $cvEtu->prenom $cvEtu->nom a déposé un CV dont les informations sont susceptibles de nous intéresser. \n\r Rendez-vous dès à présent sur www.etudiant-madeintouraine.com afin de le consulter plus en détails ! \n\r Cordialement, \n\r <p style=\"text-align : right;\">L'équipe Made in Touraine</p>";

            $headers = array();
            $headers[] = "MIME-Version: 1.0";
            $headers[] = "Content-type: text/plain; charset=iso-8859-1";
            $headers[] = "From: Made in Touraine <nathan.charvy@gmail.com>";
            $headers[] = "To: {$ef->raison} <{$ef->mail}>";
            $headers[] = "Subject: $ef->raison, un étudiant a déposé un CV vous concernant !";
            $headers[] = "X-Mailer: PHP/".phpversion();

            $envoi = mail($mail, $sujet, $contenu, implode("\r\n", $headers));  
        }*/
    }

    if(isset($_FILES)){
        $updir = dirname(dirname(dirname(__FILE__))) . '/uploads/cv/';
        $upfile = $updir . basename($_FILES['cv']['name']);
        $success = move_uploaded_file($_FILES['cv']['tmp_name'], $upfile);
        
        if($success){
            $chemin = '/equilateral_mit/uploads/cv/' . $_FILES['cv']['name'];
        }
    }
    if($_FILES['cv']['size'] > 2097152){
        header('Location: ../../postuler.php?etat=errsize&id='.$id_etu);
        exit();
    }
    if(isset($_POST['libelle'])){
        $libelle = $_POST['libelle'];
    }
    if(isset($_POST['contrat'])){
        $contrat = $_POST['contrat'];
    }

    $sql = "INSERT INTO cv SET libelle = '$libelle', chemin = '$chemin', id_etudiant = '$id_etu', contrat = '$contrat', id_filiere = '$id_f'";
    $new = $bdd->exec($sql);

    if($new){
        header('Location: ../../etuperso.php?etat=1&id='.$id_etu);
        exit();
    }
    else{
        header('Location: ../../postuler.php?etat=err&id='.$id_etu);
        exit();
    }
?>