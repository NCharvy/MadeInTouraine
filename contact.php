<?php
			require_once("assets/templates/header.php");
			require_once("assets/php/db.php");
?>

                    <div class="wrap crumbread"><a href="index.php"><p>Accueil</p></a><p> > </p> <a href="contact.php"><p>Contact</p></a></div>
        
                    <section class="accueil wrap">
                    
                    <div class="infopr env">
                            <div  class="rond"> <img src="assets/img/envelo.png"> </div>
                            <h2 class="court">Contact</h2>
                    </div>
                        
                    <div class="quiz">  
                        <form method="post" action="assets/php/formcont.php">
                          <div class="form-idable">
                                        <label>*Pseudo :</label>
                                        <input type="text" class="form-control" required="required" placeholder="Ex : James" name="pseudo" />
                                    </div>
                                
                                    <div class="form-idable">
                                        <label>*Objet :</label>
                                        <input type="text" class="form-control" required="required" placeholder="Ex : A propos du site" name="objet" />
                                    </div>
                                    
                                 <div class="form-idable">
                                    <label>*Email :</label>
                                    <input type="email" class="form-control" required="required" placeholder="Ex : james.poisson@etu.univ-tours.fr" name="email" />
                                </div>


                                <div class="form-idable">
                                    <label>*Message :</label>
                                    <textarea class="form-control" required="required" placeholder="Je voudrais savoir si..." name="message"></textarea>
                                </div>



                               
                            
                            </fieldset>
                            

                            <button type="submit" class="envoi">
                                Envoyer
                            </button>
                        </form>
                </div>

                                    
                                  
            </section>
<?php
    require_once("assets/templates/footer.php");
?>