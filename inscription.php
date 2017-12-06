<?php
    require_once("assets/templates/header.php");
    require_once("assets/php/db.php");
?>

        <div class="wrap crumbread"><a href="index.php"><p>Accueil</p></a><p> > </p> <a href="inscription.php"><p>Inscription</p></a></div>

        <section class="accueil wrap">
            <h2>Inscription</h2>
            <form method="post" action="assets/php/formregister.php" style="width : 300px; margin : auto; text-align : justify;" class="clearfix">
                <div class="item-form">
                    <input type="text" name="nom" placeholder="Nom" style="width : 140px;"/>
                    <input type="text" name="prenom" placeholder="Prénom" style="width : 140px;"/>
                </div>
                <div class="item-form">
                    <input type="mail" name="mail" placeholder="Ton adresse mail" style="width : 290px;"/>
                </div>
                <div class="item-form">
                    <input type="password" name="mdp" placeholder="Mot de passe" style="width : 140px;"/>
                </div>
                <div class="item-form">
                   <input type="password" name="mdp2" placeholder="Répeter le mot de passe" style="width : 180px;"/> 
                </div>
                <div class="item-form">
                    <input type="text" name="cp" placeholder="Code postal" style="width : 140px;"/>
                    <input tyle="text" name="ville" placeholder="Ville" style="width : 140px;"/>
                </div>
                <div class="item-form">
                    <select name="transport" style="width : 170px; margin-top : 20px;">
                        <option></option>
                        <option value="Voiture">Voiture</option>
                        <option value="Transports en commun">Transports en commun</option>
                        <option value="A pied">A pied</option>
                    </select>
                </div>
                <p style="font-size : 16px;">Tes disponibilités</p>
                <div class="item-form">
                    <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white;">Du </label>
                    <input type="date" name="dispo" placeholder="JJ/MM/AAAA" style=" width : 140px;"/>
                </div>
                <div class="item-form">
                    <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white;">Au </label>
                    <input type="date" name="dispo2" placeholder="JJ/MM/AAAA" style=" width : 140px; margin-top : 20px;"/>
                </div>
                <button type="submit" style="float : right;">
                    Confirmer
                </button>
            </form>
        </section>
<?php
    require_once("assets/templates/footer.php");
?>
px;