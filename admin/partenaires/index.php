<?php
    require_once("../assets/templates/header.php");
    require_once("../assets/php/db.php");

    $sql = 'SELECT * FROM partenaire';
    $req = $bdd->query($sql);
    $part = $req->fetchAll(PDO::FETCH_OBJ);
?>
        <nav>
            <a href="../index.php">Accueil</a>
            <a href="../entreprises/index.php">Exposants</a>
            <a href="index.php">Partenaires</a>
            <a href="../filiere/index.php">Secteurs</a>
        </nav>
        <div class="tete clearfix">
            <h2>Liste des partenaires</h2>
            <a href="alter.php" class="add">Ajouter un partenaire</a>
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
            <tr>
                <th>Logo</th>
                <th>Nom</th>
                <th>Site web</th>
                <th><b>Opérations</b></th>
            </tr>
            <?php   
                foreach($part as $p){
                    echo "<tr>
                            <td><img src=\"$p->logo\" style=\"width : 50px;\"</td>
                            <td>$p->nom</td>
                            <td>$p->web</td>
                            <td class=\"op\"><a href=\"alter.php?id=$p->id\"><i class=\"fa fa-pencil\"></i></a><a href=\"del.php?id=$p->id\"><i class=\"fa fa-trash\"></i></a></td>
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
                document.location.href=\"del.php?id=$p->id\";
            }
            else{
                document.location.href=\"index.php\";
            }
        }
        </script>";*/
    ?>
    </body>
</html>

        
