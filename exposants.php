<?php
			require_once("assets/templates/header.php");
			require_once("assets/php/db.php");

            $sql = "SELECT * FROM filiere";
            $req = $bdd->query($sql);
            $filiere = $req->fetchAll(PDO::FETCH_OBJ);
?>
        
                    <div class="wrap crumbread"><a href="index.php"><p>Accueil</p></a> <p> > </p> <a href="exposants.php"><p>Entreprises</p></a></div>
        
                    <section class="accueil wrap">
                    
                    
                        
                        <div class="expo">
                            <img src="assets/img/pictomilieu.png">
                            <h2 class="court">Voici les exposants que tu pourras rencontrer lors du salon, n'hésite pas à les contacter !</h2>
                            <form method="post" action="assets/php/filtre.php" style="margin-top : -40px;">
                                <label>
                                    <p class="grey">Choisis la catégorie qui t'intéresse</p>
                                </label>   
                                <select name="id">
                                    <option value=42>Tout</option>
                                    <?php
                                        foreach($filiere as $f){
                                            $id = $f->id;
                                            echo "<option value=\"$id\">$f->intitule</option>";
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
                                $sql = 'SELECT * FROM entreprise WHERE id_filiere='.$id_f;
                                $req = $bdd->query($sql);
                                $entp = $req->fetchAll(PDO::FETCH_OBJ);
                            }
                            else{
                                $sql = "SELECT * FROM entreprise";
                                $req = $bdd->query($sql);
                                $entp = $req->fetchAll(PDO::FETCH_OBJ);
                            }
                            foreach($entp as $e){
                                echo "<div class=\"bloc\">

                                <div class=\"logoo\"><a href=\"entreprise.php?id=$e->id\"><img class=\"loogo\"  src=\"$e->logo\"></a></div>

                                <p class=\"bloco\">$e->raison</p>
                          
                                <hr>
                          
                                <p class=\"bloco\">$e->domaine</p>
                                
                                <a href=\"entreprise.php?id=$e->id\"><div class=\"button\"><p>Découvrir ></p></div></a>

                            </div>";  
                            }
                        ?>
                    </div>
                        
                        

                                <h2 class="court">Envoie-leur ton CV !</h2>

                        
                        <br />
                    
                <div class="lastone">


                        <div class="bouton">

                            <a href="#"><img class="bouton" src="assets/img/pictocv.png"></a>

                        </div>
                        
                    </div>
                                    
                                  
            </section>
<?php
    require_once("assets/templates/footer.php");
?> 