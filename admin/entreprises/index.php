<?php
    require_once("../assets/templates/header.php");
    require_once("../assets/php/db.php");

    $sql = 'SELECT * FROM filiere INNER JOIN entreprise ON filiere.id = entreprise.id_filiere';
    $req = $bdd->query($sql);
    $exp = $req->fetchAll(PDO::FETCH_OBJ);
?>
        <nav>
            <a href="../index.php">Accueil</a>
            <a href="index.php">Exposants</a>
            <a href="../partenaires/index.php">Partenaires</a>
            <a href="../filiere/index.php">Secteurs</a>
        </nav>
        <div class="tete clearfix">
            <h2>Liste des entreprises</h2>
            <a href="alter.php" class="add">Ajouter une entreprise</a>
        </div>
        <section class="aux">
            <?php
                if(isset($_GET['etat'])){
                    if($_GET['etat'] == 1){
                        echo "<p style=\"color : red\">Création enregistrée !</p>";
                    }
                    else if($_GET['etat'] == 2){
                        echo "<p style=\"color : red\">Modification enregistrée !</p>";
                    }
                }
                else{
                    echo "";
                }
                if(isset($_GET['del'])){
                    if($_GET['del'] == 1){
                        echo "<p style=\"color : red\">Suppression effectuée !</p>";
                    }
                    else if($_GET['del'] == 2){
                        echo "<p style=\"color : red\">Echec de suppression !</p>";
                    }
                }
                else{
                    echo "";
                }
            ?>
        </section>
        <table>
            <th>Logo</th>
            <th>Raison</th>
            <th>Secteur</th>
            <th>Ville</th>
            <th>Code postal</th>
            <th>Site web</th>
            <th><b>Opération</b></th>
            <?php
                foreach($exp as $x){
                    echo "<tr>
                            <td><img src=\"$x->logo\" style=\"height : 50px;\" /></td>
                            <td>$x->raison</td>
                            <td>$x->intitule</td>
                            <td>$x->ville</td>
                            <td>$x->cp</td>
                            <td>$x->web</td>
                            <td class=\"op\"><a href=\"alter.php?id=$x->id\"><i class=\"fa fa-pencil\"></i>
</a><a class=\"a-fake\" href=\"del.php?id=$x->id\"><i class=\"fa fa-trash\"></i></a></td>
                        </tr>";
                }
            ?>
        </table>
        
    <?php
    /*
    !!!! A DEMANDER !!!!
    <span class=\"a-fake\" onclick=\"demandeSuppr()\"></span>
    
    
    echo "<script type=\"text/javascript\">
        function demandeSuppr(){
            if(confirm(\"Voulez-vous vraiment supprimer cet élément ?\")){
                document.location.href=\"del.php?id=$x->id\";
            }
            else{
                document.location.href=\"index.php\";
            }
        }
        </script>";*/
    ?>
    </body>
</html>