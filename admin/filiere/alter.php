<?php
    require_once("../assets/php/db.php");
    require_once("../assets/templates/header.php");

    $id = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $sql = 'SELECT * FROM filiere WHERE id='.$id;
        $req = $bdd->query($sql);
        $unSect = $req->fetch(PDO::FETCH_OBJ);
    }
?>
        <section class="alt-sect">
            <a href="index.php" class="alt-re">Retour aux secteurs</a>
        <?php
            if(!empty($id)){
                echo "<h2>Modification de secteur</h2>";
            }
            else{
                echo "<h2>Création d'un secteur</h2>";
            }
        ?>
            <?php
                if(isset($_GET['etat']) && $_GET['etat'] == 'error'){
                    echo "<p style=\"color : red\">Erreur lors de l'execution du formulaire !</p>";
                }
                else{
                    echo "";
                }
            ?>
            <form method="post" class="form-alt" action="<?php if(!empty($id)){ echo "form-fil.php?id=$id"; } else{ echo "form-fil.php"; } ?>">
                <div class="input-alt">
                    <label>Intitulé :</label>
                    <input type="text" name="intitule" value="<?php if(!empty($id)){ echo $unSect->intitule; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <button type="submit">
                        Confirmer
                    </button>
                </div>
            </form>
        </section>
    </body>
</html>