<?php
    require_once("assets/templates/header.php");
    require_once("assets/php/db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        header('Location: co.php');
        exit();
    }

    if(!isset($_SESSION['logged']) || ($_SESSION['logged'] !== true)){
        header('Location: co.php');
        exit();
    }

    $sql = 'SELECT * FROM filiere';
    $req = $bdd->query($sql);
    $fil = $req->fetchAll(PDO::FETCH_OBJ);
?>
        <div class="wrap crumbread"><a href="index.php"><p>Accueil</p></a><p> > </p> <a href="postuler.php"><p>Postuler</p></a></div>

        <h2>Poste ton CV</h2>

        <section class="accueil wrap">
            <form method="post" action="assets/php/formcv.php?id_etu=<?php echo $id; ?>" enctype="multipart/form-data" style="width : 300px; text-align : left; margin : auto;">
                <div class="item-cv">
                    <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white; margin-top : 20px;">Nom du cv : </label>
                    <input type="text" name="libelle" required="required"/>
                </div>
                <br />
                <div class="item-cv">
                    <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white; margin-top : 20px;">Type de contrat : </label>
                    <select name="contrat" required="required">
                        <option value="Stage/apprentissage">Stage/apprentissage</option>
                        <option value="Emploi jeunes diplômés">Emploi jeunes diplômés</option>
                        <option value="Job">Job</option>
                    </select>
                </div>
                <br />
                <div class="item-cv">
                    <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white; margin-top : 20px;">Secteur : </label>
                    <select name="id_f">
                        <?php
                            foreach($fil as $f){
                                echo "<option value=\"$f->id\">$f->intitule</option>";
                            }
                        ?>
                    </select>
                </div>
                <br />
                <div class="item-cv">
                    <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white; margin-top : 20px;">Envoyez votre CV : </label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                    <input type="file" name="cv" accept=".pdf" required="required"/>
                </div>
                <div class="item-cv">
                    <button type="submit" class="submit" style="width : 120px; margin-top : 20px;">
                        Valider
                    </button>
                </div>
            </form>
        </section>
<?php
    require_once("assets/templates/footer.php");
?>