<?php
    require_once("assets/templates/header.php");
    require_once("assets/php/db.php");
    $id = null;

    //session_start();
    if(!isset($_SESSION['logged']) || ($_SESSION['logged'] !== true)){
        header('Location: co.php');
        exit();
    }
        $id = $_GET['id'];

    $sql = 'SELECT * FROM etudiant WHERE id='.$id;
    $req = $bdd->query($sql);
    $etu = $req->fetch(PDO::FETCH_OBJ);
?>
        <div class="wrap crumbread"><a href="index.php"><p>Accueil</p></a> <p> > </p> <a href="etuperso.php?"><p>Mon profil</p></a></div>

        <section class="accueil wrap">
            <a href="assets/php/unlog.php" style="text-decoration : none;"><p style="text-align : right;">X Déconnexion</p></a>
            <h2>Mon profil</h2>
            <form method="post" action="assets/php/etumod.php?id=<?php echo $id; ?>" style="width : 300px; margin : auto; text-align : justify;" class="clearfix">
                <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white; margin-top : 20px;">Nom et prénom </label>
                <div class="item-form">
                    <input type="text" name="nom" value="<?php echo $etu->nom; ?>" style="width : 140px;"/>
                    <input type="text" name="prenom" value="<?php echo $etu->prenom; ?>" style="width : 140px;"/>
                </div>
                <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white; margin-top : 20px;">Adresse e-mail </label>
                <div class="item-form">
                    <input type="mail" name="mail" value="<?php echo $etu->mail; ?>" style="width : 290px;"/>
                </div>
                <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white; margin-top : 20px;">Changer le mot de passe </label>
                <div class="item-form">
                    <input type="password" name="mdp" placeholder="Mot de passe" style="width : 140px;"/>
                </div>
                <div class="item-form">
                   <input type="password" name="mdp2" placeholder="Répeter le mot de passe" style="width : 180px;"/> 
                </div>
                <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white; margin-top : 20px;">Ville et code postal </label>
                <div class="item-form">
                    <input tyle="text" name="ville" value="<?php echo $etu->ville; ?>" style="width : 140px;"/>
                    <input type="text" name="cp" value="<?php echo $etu->cp; ?>" style="width : 140px;"/>
                </div>
                <div class="item-form">
                    <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white;">Transport </label>
                    <select name="transport" style="width : 170px; margin-top : 20px;">
                        <option><?php echo $etu->transport; ?></option>
                        <option value="Voiture">Voiture</option>
                        <option value="Transports en commun">Transports en commun</option>
                        <option value="A pied">A pied</option>
                    </select>
                </div>
                <p style="font-size : 16px;">Tes disponibilités</p>
                <div class="item-form">
                    <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white;">Du </label>
                    <input type="date" name="dispo" value="<?php echo $etu->dispo; ?>" style=" width : 140px;"/>
                </div>
                <div class="item-form">
                    <label style="font-size : 16px; font-family : 'caviar', sans-serif; color : white;">Au </label>
                    <input type="date" name="dispo2" value="<?php echo $etu->dispo2; ?>" style=" width : 140px; margin-top : 20px;"/>
                </div>
                <button type="submit" style="float : right;">
                    Confirmer
                </button>
            </form>
            <a href="postuler.php?id=<?php echo $id; ?>"><img src="assets/img/pictocv.png" /></a>
        </section>

<?php
    require_once("assets/templates/footer.php");
?>