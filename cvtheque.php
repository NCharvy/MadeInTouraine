<?php
			require_once("assets/templates/header.php");
			require_once("assets/php/db.php");

            $sql = "SELECT * FROM filiere";
            $req = $bdd->query($sql);
            $filiere = $req->fetchAll(PDO::FETCH_OBJ);
?>
        
                    <div class="wrap crumbread"><a href="index.php"><p>Accueil</p></a> <p> > </p> <a href="cvtheque.php"><p>CV en ligne</p></a></div>
        
                    <section class="accueil wrap">
                    
                    
                        
                        <div class="expo">
                            <h2 class="court">Voici la CVthèque, dans laquelle vous pourrez consulter les CV vous concernant.</h2>
                            <form method="post" action="assets/php/filtreCV.php" style="margin-top : -40px;">
                                <label>
                                    <p class="grey">Choisissez le secteur des CV</p>
                                </label>   
                                <select name="id">
                                    <option value=42>Tout</option>
                                    <?php
                                        foreach($filiere as $f){
                                            $id = $f->id;
                                            echo "<option value=\"$f->id\">$f->intitule</option>";
                                        }
                                    ?>
                                </select>
                                <button type="submit">
                                    Filtrer
                                </button>
                            </form>
                        </div>

                    <div class=" clearfix coligne">
                        <?php
                            if(isset($_GET['id'])){
                                $id_f = $_GET['id'];
                                $sql = 'SELECT * FROM cv INNER JOIN etudiant ON cv.id_etudiant = etudiant.id WHERE id_filiere='.$id_f;
                                $req = $bdd->query($sql);
                                $cvEtu = $req->fetchAll(PDO::FETCH_OBJ);
                            }
                            else{
                                $sql = "SELECT * FROM cv INNER JOIN etudiant ON cv.id_etudiant = etudiant.id";
                                $req = $bdd->query($sql);
                                $cvEtu = $req->fetchAll(PDO::FETCH_OBJ);
                            }
                            foreach($cvEtu as $c){
                                echo "<div class=\"bloc\">

                                <p class=\"bloco\">Nom du CV : $c->libelle</p>
                          
                                <hr>
                                
                                <p class=\"bloco\">Type de contrat : $c->contrat</p>
                          
                                <p class=\"bloco\">Etudiant correspondant : $c->prenom $c->nom</p>
                                
                                <a href=\"$c->chemin\"><div class=\"button\"><p>Télécharger ></p></div></a>

                            </div>";  
                            }
                        ?>
                    </div>                                 
            </section>
<?php
    require_once("assets/templates/footer.php");
?> 