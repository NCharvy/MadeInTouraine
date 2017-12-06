<?php
    require_once("../assets/templates/header.php");
    require_once("../assets/php/db.php");

    $id = null;
    $id_f = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $sql = 'SELECT * FROM filiere INNER JOIN entreprise ON filiere.id = entreprise.id_filiere WHERE entreprise.id='.$id;
        $req = $bdd->query($sql);
        $uneEntp = $req->fetch(PDO::FETCH_OBJ);
        
        $sql = 'SELECT * FROM filiere';
        $req = $bdd->query($sql);
        $entpFil = $req->fetchAll(PDO::FETCH_OBJ);
    }
    else{
        $sql = 'SELECT * FROM filiere';
        $req = $bdd->query($sql);
        $entpFil = $req->fetchAll(PDO::FETCH_OBJ);
    }
?>
        <section class="alt-sect">
            <a href="index.php" class="alt-re">Retour aux entreprises</a>
        <?php
            if(!empty($id)){
                echo "<h2>Modification d'entreprise</h2>";
            }
            else{
                echo "<h2>Création d'une entreprise</h2>";
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
            <form method="post" enctype="multipart/form-data" class="form-alt" action="<?php if(!empty($id)){ echo "form-entp.php?id=$id"; } else{ echo "form-entp.php"; } ?>">
                <div class="input-alt">
                    <label>Logo :</label>
                    <?php
                        if(!empty($uneEntp->logo)){
                            echo "<img src=\"$uneEntp->logo\" />";
                        }
                        else{
                            echo "<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"2097152\" />
                                <input type=\"file\" name=\"logo\" accept=\"image/jpg, image/png\" />";
                        }
                    ?>
                </div>
                <div class="input-alt">
                    <label>Raison :</label>
                    <input type="text" name="raison" value="<?php if(!empty($id)){ echo $uneEntp->raison; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <label>N° SIRET :</label>
                    <input type="text" name="siret" value="<?php if(!empty($id)){ echo $uneEntp->siret; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <label>N° APE :</label>
                    <input type="text" name="ape" value="<?php if(!empty($id)){ echo $uneEntp->ape; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <label>Domaine d'activité :</label>
                    <input type="text" name="domaine" value="<?php if(!empty($id)){ echo $uneEntp->domaine; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <label>Adresse :</label>
                    <input type="text" name="adresse" value="<?php if(!empty($id)){ echo $uneEntp->adresse; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <label>Complément :</label>
                    <input type="text" name="complement" value="<?php if(!empty($id)){ echo $uneEntp->complement; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <label>Ville :</label>
                    <input type="text" name="ville" value="<?php if(!empty($id)){ echo $uneEntp->ville; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <label>Code postal :</label>
                    <input type="text" name="cp" value="<?php if(!empty($id)){ echo $uneEntp->cp; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <label>Nombre de salariés :</label>
                    <input type="text" name="salaries" value="<?php if(!empty($id)){ echo $uneEntp->salaries; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <label>Site web :</label>
                    <input type="text" name="web" value="<?php if(!empty($id)){ echo $uneEntp->web; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <label>Adresse e-mail :</label>
                    <input type="mail" name="mail" value="<?php if(!empty($id)){ echo $uneEntp->mail; } else{ echo ""; } ?>" />
                </div>
                <div class="input-alt">
                    <select name="id_f">
                        <?php
                            if(!empty($id)){
                        ?>
                        <option value="<?php echo $uneEntp->id_filiere; ?>"</option><?php echo $uneEntp->intitule; ?></option>
                            <?php
                                foreach($entpFil as $ef){
                                    echo "<option value=\"$ef->id\">$ef->intitule</option>";
                                    $id_f = $ef->id;
                                }
                            }
                            else{
                                foreach($entpFil as $ef){
                                    echo "<option value=\"$ef->id\">$ef->intitule</option>";
                                    $id_f = $ef->id;
                                }
                            }
                            ?>
                    </select>
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