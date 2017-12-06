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
                                    
                                    <h3><a href="index.php?lang=fr">FR</a> / <a href="index.php?lang=en">EN</a></h3>
                                    
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
                    <div class="wrap crumbread">
                        <a href="index.php"><p>Accueil</p></a>
                    </div>
        
                    <section class="accueil wrap">
                    
                    
                        
                         <div class="raw clearfix">
                        
                            <img class="smol entree bibi" src="<?php if(!empty($fr) || !isset($_GET['lang'])){ echo "assets/img/thumbs/entree.png"; } else if(!empty($en)){ echo "assets/img/thumbsEN/entree.png"; } ?>">
                            <img class="biig entree very" src="<?php if(!empty($fr) || !isset($_GET['lang'])){ echo "assets/img/entree.png"; } else if(!empty($en)){ echo "assets/img/entreeEN.png"; } ?>">

                             <div class="etp text">
                             
                                 <?php
                                    if(!empty($fr) || !isset($_GET['lang'])){
                                     echo "<h2>Tu es <span class=\"jaune\">étudiant</span> ?</h2>
                                <br />
                                <h2>Le salon</h2>
                                <h2><span class=\"jaune big\">Made in Touraine</span></h2>
                                <h2>est fait pour toi !</h2>";
                                    }
                                    else if(!empty($en)){
                                        echo "<h2>You are a <span class=\"jaune\">student</span> ?</h2>
                                <br />
                                <h2>The business fair</h2>
                                <h2><span class=\"jaune big\">Made in Touraine</span></h2>
                                <h2>is made for you!</h2>";
                                    }
                                ?>
                                 
                            </div>
                                <br />

                            <img class="smol edition" src="<?php if(!empty($fr) || !isset($_GET['lang'])){ echo "assets/img/thumbs/edition.png"; }else if(!empty($en)){ echo "assets/img/thumbsEN/edition.png"; } ?>">
                            <img class="biig edition" src="<?php if(!empty($fr) || !isset($_GET['lang'])){ echo "assets/img/edition.png"; }else if(!empty($en)){ echo "assets/img/editionEN.png"; } ?>">
                             
                        </div>
                        
                        <br />
                        <?php
                        if(!empty($fr) || !isset($_GET['lang'])){
                            echo "<div class=\"bleue\">
                            <h2><span class=\"jaune\">Les 27 et 28 mars 2015</span> au <span class=\"jaune\">Centre des Congrès du Vinci</span> à <span class=\"jaune\">Tours</span></h2>
                        </div>
                        
                        <h2 class=\"court\">Pars à la découverte d'entreprises locales, une occasion unique pour...</h2>

                    <div class=\"clearfix coligne\">
                        
                      <div class=\"bloc\">

                                <div class=\"rond\"><a href=\"exposants.php\"><img src=\"assets/img/pictogauche.png\"></a></div>

                                <p class=\"bloco\">Aller à la rencontre de métiers et de savoir-faire innovants</p>
                                
                                <a href=\"exposants.php\"><div class=\"button\"><p>Découvrir ></p></div></a>

                            </div>


                            <div class=\"bloc\">

                                <div class=\"rond\"><a href=\"postuler.php\"><img src=\"assets/img/pictomilieu.png\"></a></div>

                                <p class=\"bloco\">Ouvrir des opportunités de stage, d'alternance ou d'emploi</p>
        
                                <a href=\"postuler.php\"><div class=\"button\"><p>Découvrir ></p></div></a>


                            </div>

                            <div class=\"bloc\">

                                <div class=\"rond\"><a href=\"infospratiques.php\"><img src=\"assets/img/pictodroite.png\"></a></div>

                                <p class=\"bloco\">Passer un moment agréable tout en développant ton réseau professionnel</p>

                                <a href=\"infospratiques.php\"><div class=\"button\"><p>Découvrir ></p></div></a>

                            </div> 
                        
                    </div>
                        
                        

                                <h2 class=\"court\">Alors ne perds pas de temps, envoie ton CV aux entreprises, saisis ta chance !</h2>

                        
                        <br />";
                        }
                       else if(!empty($en)){
                        echo "<div class=\"bleue\">
                            <h2>On <span class=\"jaune\">March the 27th and 28th 2015</span> at <span class=\"jaune\">Centre des Congrès du Vinci</span> in <span class=\"jaune\">Tours</span></h2>
                        </div>
                        
                        <h2 class=\"court\">Discover local firms, a unique occasion to...</h2>

                    <div class=\"clearfix coligne\">
                        
                      <div class=\"bloc\">

                                <div class=\"rond\"><a href=\"exposants.php\"><img src=\"assets/img/pictogauche.png\"></a></div>

                                <p class=\"bloco\">Meet innovative trades and expertises</p>
                                
                                <a href=\"exposants.php\"><div class=\"button\"><p>Discover ></p></div></a>

                            </div>


                            <div class=\"bloc\">

                                <div class=\"rond\"><a href=\"postuler.php\"><img src=\"assets/img/pictomilieu.png\"></a></div>

                                <p class=\"bloco\">Have an opportunity for internship, sandwich courses and jobs</p>
        
                                <a href=\"postuler.php\"><div class=\"button\"><p>Discover ></p></div></a>


                            </div>

                            <div class=\"bloc\">

                                <div class=\"rond\"><a href=\"infospratiques.php?lang=en\"><img src=\"assets/img/pictodroite.png\"></a></div>

                                <p class=\"bloco\">Have a nice time while developing your professional network</p>

                                <a href=\"infospratiques.php?lang=en\"><div class=\"button\"><p>Discover ></p></div></a>

                            </div> 
                        
                    </div>
                        
                        

                                <h2 class=\"court\">So, do not waste any time, post your resume and try your luck!</h2>

                        
                        <br />";
                        }
                    ?>
                    
                <div class="lastone">


                        <div class="bouton">
                                <a href="postuler.php"><img class="bouton" src="<?php if(!empty($fr) || !isset($_GET['lang'])){ echo "assets/img/pictocv.png"; }else if(!empty($en)){ echo "assets/img/pictocvEN.png"; } ?>"></a>
                        </div>
                        
                    </div>
                                    
                                  
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