<?php
    require_once("assets/templates/header.php");
    require_once("assets/php/db.php");

    $sql = "SELECT * FROM partenaire";
    $req = $bdd->query($sql);
    $part = $req->fetchAll(PDO::FETCH_OBJ);
?>

        
                    <div class="wrap crumbread"><a href="index.php"><p>Accueil</p></a> <p> > </p> <a href="partenaires.php"><p>Partenaires</p></a></div>
        
                    <section class="accueil wrap">
                    
                
                            <h2 class="court">Voici les partenaires du salon Made in Touraine de cette année !</h2>

                    <div class=" clearfix coligne">
                        <?php
                            foreach($part as $p){
                                echo "<div class=\"bloc\">

                                <div class=\"logoo\"><a target=\"_blank\" href=\"$p->web\"><img class=\"loogo\"  src=\"$p->logo\"></a></div>

                                <p class=\"bloco\">$p->nom</p>
                          
                                <hr>
                                
                                <a target=\"_blank\" href=\"$p->web\"><div class=\"button\"><p>Découvrir ></p></div></a>
    
                            </div>";  
                            }
                        ?>
                    </div>
            </section>
<?php
    require_once("assets/templates/footer.php");
?>