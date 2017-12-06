<?php
    require_once("assets/templates/header.php");
    require_once("assets/php/db.php");

    $id = $_GET['id'];

    $sql = 'SELECT * FROM entreprise WHERE id='.$id;
    $req = $bdd->query($sql);
    $entp = $req->fetch(PDO::FETCH_OBJ);
?>
        <div class="wrap crumbread"><a href="index.php"><p>Accueil</p></a> <p> > </p> <a href="exposants.php"><p>Entreprises</p></a> <p> > </p><a href="<?php echo "entreprise.php?id=$id"; ?>"><p>Fiche détaillée</p></a></div>
        <section class="accueil wrap">
            <?php
                echo "  <div class=\"bloc\" style=\"width : 500px !important;\">
                            <img src=\"$entp->logo\" />
                            <p style=\"text-align : justify !important;\"><span>Nom : </span>$entp->raison</p>
                           <p style=\"text-align : justify !important;\"><span>N° SIRET : </span>$entp->siret</p>
                           <p style=\"text-align : justify !important;\"><span>Activité : </span>$entp->domaine</p>
                           <p style=\"text-align : justify !important;\"><span>N° APE : </span>$entp->ape</p>
                           <p style=\"text-align : justify !important;\"><span>Nombre de salariés : </span>$entp->salaries</p>
                           <p style=\"text-align : justify !important;\"><span>Adresse : </span>$entp->adresse</p>
                           <p style=\"text-align : justify !important;\"><span>Complément : </span>$entp->complement</p>
                           <p style=\"text-align : justify !important;\"><span>Ville : </span>$entp->ville</p>
                           <p style=\"text-align : justify !important;\"><span>Code postal : </span>$entp->cp</p>
                           <p style=\"text-align : justify !important;\"><span>Site web : </span>$entp->web</p>
                        </div>";
            ?>
        </section>

<?php
    require_once("assets/templates/footer.php");
?>