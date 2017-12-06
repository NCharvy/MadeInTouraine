<?php
    require_once("../assets/php/db.php");
    require_once("../assets/templates/header.php");

    $id = null;
    $error = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $sql = 'SELECT * FROM partenaire WHERE id='.$id;
        $req = $bdd->query($sql);
        $unPart = $req->fetch(PDO::FETCH_OBJ);
    }
?>
        <section class="alt-sect">
            <a href="index.php" class="alt-re">Retour aux partenaires</a>
        <?php
            if(!empty($id)){
                echo "<h2>Modification de partenaire</h2>";
            }
            else{
                echo "<h2>Création d'un partenaire</h2>";
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
            <form method="post" enctype="multipart/form-data" class="form-alt" action="<?php if(!empty($id)){ echo "form-part.php?id=$id"; } else{ echo "form-part.php"; } ?>">
                <div class="input-alt">
                    <label>Logo :</label>
                    <?php
                        if(!empty($unPart->logo)){
                            echo "<img src=\"$unPart->logo\" />";
                        }
                        else{
                            echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"2097152\" />
                            <input type=\"file\" accept=\"image/png, image/jpg\" name=\"logo\"/>";
                        }
                    ?>
                    
                </div>
                <div class="input-alt">
                    <label>Nom :</label>
                    <input type="text" name="nom" value="<?php if(!empty($id)){ echo $unPart->nom; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <label>Site web :</label>
                    <input type="text" name="web" value="<?php if(!empty($id)){ echo $unPart->web; } else{ echo ""; } ?>" />
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
