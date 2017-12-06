<?php
    require_once("assets/php/db.php");
    $fr = null;
    $en = null;
    
    if(isset($_GET['lang'])){
        if($_GET['lang'] == 'fr'){
            $fr = $_GET['lang'];
        }
        else if($_GET['lang'] == 'en'){
            $en = $_GET['lang'];
        }
    }
?>
<!doctype html>

<html lang= "fr" >
    <head>
        <meta charset="utf-8" />
        <title>Made in Touraine </title>
        <meta name="keywords" content="salon made in touraine tours etudiant innovation emploi" />
        <link rel="stylesheet" href="assets/css/reset.css" />
        <link rel="stylesheet" href="assets/css/styles.css" />

    </head>
    <body>
                 <header>
                    <div class='bannsup clearfix'>
 
                                <div class="langue">
                                    
                                    <h3><a href="infospratiques.php?lang=fr">FR</a> / <a href="infospratiques.php?lang=en">EN</a></h3>
                                    
                                </div>
                                
                                <div class="reseauxsoc">
                                
                                    <a target="_blank" href="http://www.facebook.com/MadeinTouraine?fref=ts"><img src="assets/img/facebook.png"></a>
                                    <a target="_blank" href="http://twitter.com/MadeinTouraine"><img src="assets/img/twitter.png"></a>
                                    <a target="_blank" href="http://www.linkedin.com/groups/Made-In-Touraine-8250133?gid=8250133&mostPopular=&trk=tyah&trkInfo=idx%3A1-1-1%2CtarId%3A1424263030407%2Ctas%3Amade+in+touraine"><img src="assets/img/linkedin.png"></a>
                                    
                                </div>
                                
                                <div class="toutblocinscription">
                                                                         
                                        
                                    <div class="blocinscription">
                                        <form method="post" action="assets/php/login.php" style="display: inline;">
                                            <input type="mail" class="form-control" name="mail" placeholder="Adresse mail" autofocus>

                                            <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">

                                            <input class="submit" type="submit" value="OK"/>
                                        </form>
                                    
                                    </div>
                                    
                                    <a href="inscription.php"> <img class="bonhomme" src="assets/img/bonhomme.png"> </a>       
                                        
                                </div>
                                
                            </div>
 
                            <div class="wrap ban">
                                                
                                    <a class="smol" href="index.php"><img src="<?php if(!empty($fr)){ echo "assets/img/thumbs/banniere.png"; } else if(!empty($en)){ echo "assets/img/thumbsEN/banniere.png"; }else{ echo "assets/img/thumbs/banniere.png"; } ?>"></a>
                                    <a class="biig" href="index.php"><img src="<?php if(!empty($fr)){ echo "assets/img/banniere.png"; } else if(!empty($en)){ echo "assets/img/banniereEN.png"; }else{ echo "assets/img/banniere.png"; } ?>"></a>

                            </div>
                     
                            <nav class="wrap">

                                    <img class="hamb" src="assets/img/thumbs/hamb.png">


                                <ul class="navbar">

                                            <li><a href="index.php"><?php if(!empty($fr) || !isset($_GET['lang'])){ echo "Accueil"; }else if(!empty($en)){ echo "Home"; } ?></a></li> 
                                            <li><a href="infospratiques.php"><?php if(!empty($fr) || !isset($_GET['lang'])){ echo "Infos pratiques"; }else if(!empty($en)){ echo "Useful info"; } ?></a></li> 
                                            <li><a href="exposants.php"><?php if(!empty($fr) || !isset($_GET['lang'])){ echo "Exposants"; }else if(!empty($en)){ echo "Exhibitors"; } ?></a></li> 
                                            <li><a href="postuler.php"><?php if(!empty($fr) || !isset($_GET['lang'])){ echo "Postuler"; }else if(!empty($en)){ echo "Apply"; } ?></a></li> 
                                            <li><a href="quiz.php">Quiz</a></li> 

                                </ul>

                            </nav>
                     
                     </header>
                    <div class="wrap crumbread"><a href="index.php"><p>Accueil</p></a><p> > </p> <a href="exposants.php"><p>Infos pratiques</p></a></div>
        
                    <section class="accueil wrap">
                    
                    
                        
                        <br />
                        <?php
                            if(!empty($fr) || !isset($_GET['lang'])){
                                echo "<div class=\"infopr\">
                            <div  class=\"rond\"> <img src=\"assets/img/pictodroite.png\"> </div>
                            <h2 class=\"court\">Tout ce qu'il faut savoir sur le salon</h2>
                        </div>
                        
                        
                            </br>
                                            
                            <div class=\"biig inn\"><img class=\"infop\" src=\"assets/img/infop.png\">
                               
                            <a target=\"_blank\" href=\"https://www.google.fr/maps/place/Le+Vinci/@47.391356,0.693302,17z/data=!3m1!4b1!4m2!3m1!1s0x47fcd5c955555555:0x634301b4d1c83a7e\"><img class=\"pico\" src=\"assets/img/pictogeo.png\">  </a>
                                <p>Le Vinci</p>
<p>26-28 Boulevard Heurteloup</p>
<p>37000 Tours</p>
<p>France</p>
                            </div>
                            
                    <div class=\"smol infop\">
                                
                                
                                <h2 class=\"court\"><span class=\"rouge\">QUAND ?</span></h2>
                                <p class=\"grey bigg\">Vendredi 27 mars 2015 de 9 h 30 à 18 h 30</p>
                                 <p class=\"grey bigg\">Samedi 28 mars 2015 de 9 h 30 à 18 h 00</p>
                                
                                <hr class=\"separateur\">
  
                                <h2 class=\"court\"><span class=\"jauni\">COMBIEN ?</span></h2>
                                <p class=\"grey bigg\">0 €... c'est gratuit !</p>
                                 <p class=\"grey bigg\">Ouvert à tous</p>
                                
                                <hr class=\"separateur\">
  
                                <h2 class=\"court\"><span class=\"bleu\">LE PROGRAMME</span></h2>
                                <p class=\"grey bigg\">Inauguration du salon</p>
                                 <p class=\"grey bigg\">Signature d'une convention de partenariat entre Projet pour la Touraine et l'Université François Rabelais</p>
                                <p class=\"grey bigg\">Quiz autour des sociétés exposantes</p>
                                 <p class=\"grey bigg\">Remise de prix</p>
                               
                                  
                                <hr class=\"separateur\">
  
                                <h2 class=\"court\"><span class=\"orange\">L'EMPLACEMENT</span></h2>
                                <p class=\"grey bigg\">Au Centre de Congrès du Vinci</p>
                                 <p class=\"grey bigg\">TOURS (37)</p>
                                
                                  
                                <hr class=\"separateur\">
  
                                <h2 class=\"court\"><span class=\"grise\">COMMENT VENIR ?</span></h2>
                                <p class=\"grey bigg\">En voiture... </br> C'est à moins de 1km de l'autoroute A10 et 4 parkings sont à proximité</p>
                                 <p class=\"grey bigg\">En train...</br> C'est juste en face de la gare</p>
                                
                                
                            </div>";
                            }
                            
                            else if(!empty($en)){
                                echo "<div class=\"infopr\">
                            <div  class=\"rond\"> <img src=\"assets/img/pictodroite.png\"> </div>
                            <h2 class=\"court\">What you have to know about the Business Fair</h2>
                        </div>
                        
                        
                            </br>
                                            
                            <div class=\"biig inn\"><img class=\"infop\" src=\"assets/img/infopraEN.png\">
                               
                            <a target=\"_blank\" href=\"https://www.google.fr/maps/place/Le+Vinci/@47.391356,0.693302,17z/data=!3m1!4b1!4m2!3m1!1s0x47fcd5c955555555:0x634301b4d1c83a7e\"><img class=\"pico\" src=\"assets/img/pictogeo.png\">  </a>
                                <p>Le Vinci</p>
<p>26-28 Boulevard Heurteloup</p>
<p>37000 Tours</p>
<p>France</p>
                                
                                
                                
                            </div>
                            
                            <div class=\"smol infop\">
                                
                                
                                <h2 class=\"court\"><span class=\"rouge\">WHEN?</span></h2>
                                <p class=\"grey bigg\">Friday, March 27th 2015 from 9.30 to 6.30
</p>
                                 <p class=\"grey bigg\">Saturday, March 28th 2015 from 9.30 to 6.00</p>
                                
                                <hr class=\"separateur\">
  
                                <h2 class=\"court\"><span class=\"jauni\">HOW MUCH?</span></h2>
                                <p class=\"grey bigg\">0 €... for free!</p>
                                 <p class=\"grey bigg\">Open to all</p>
                                
                                <hr class=\"separateur\">
  
                                <h2 class=\"court\"><span class=\"bleu\">PROGRAMME</span></h2>
                                <p class=\"grey bigg\">Opening ceremony
</p>
                                 <p class=\"grey bigg\">Signing of a partnership between «Projet pour la Touraine» and Université François Rabelais
</p>
                                <p class=\"grey bigg\">Quiz about exhibitors
</p>
                                
                                <p class=\"grey bigg\">Award ceremony</p>
                                
                                  
                                <hr class=\"separateur\">
  
                                <h2 class=\"court\"><span class=\"orange\">GETTING HERE</span></h2>
                                <p class=\"grey bigg\">Centre de Congrès du Vinci</p>
                                 <p class=\"grey bigg\">TOURS (37)</p>
                                
                                  
                                <hr class=\"separateur\">
  
                                <h2 class=\"court\"><span class=\"grise\">HOW TO GET THERE?</span></h2>
                                <p class=\"grey bigg\">By car.. </br> Less than 1km from the A10, near four car parks</p>
                                 <p class=\"grey bigg\">By train...</br> Right in front of the station</p>
                                
                                
                            </div>";
                            }
                        ?>
                        
                                
                        
                        
                                    
                                  
            </section>
<footer>
                            
                            <ul class="footix">

                                <li><a href="contact.php"><?php if(!empty($fr) || !isset($_GET['lang'])){ echo "Contact"; }else if(!empty($en)){ echo "Contact us"; } ?></a></li>
                                <li><a href="logcvtheque.php"><?php if(!empty($fr) || !isset($_GET['lang'])){ echo "CV en ligne"; }else if(!empty($en)){ echo "Resume"; } ?></a></li> 
                                <li><a href="partenaires.php"><?php if(!empty($fr) || !isset($_GET['lang'])){ echo "Partenaires"; }else if(!empty($en)){ echo "Partners"; } ?></a></li> 
                                <li><a href="mentions.php"><?php if(!empty($fr) || !isset($_GET['lang'])){ echo "Mentions légales"; }else if(!empty($en)){ echo "Imprint"; } ?></a></li> 

                            </ul>  
                        
                            <div class="part wrap"><img class="part wrap" src="assets/img/partenaires.jpg"></div>

                        
                    </footer>
                
        </div>
        
        
        <script src="assets/js/jquery-v2.1.1.min.js">
        </script>
        
        <script src="assets/js/global.js">
        </script>

    </body>
</html>