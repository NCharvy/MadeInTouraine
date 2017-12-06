<?php
    require_once("assets/templates/header.php");
?>

        <div class="wrap crumbread"><a href="index.php"><p>Accueil</p></a> <p> > </p> <a href="co.php"><p>Connexion</p></a></div>

        <section class="accueil wrap">
            <h2>Connecte-toi !</h2>
            <form method="post" action="assets/php/login.php" style="display: inline;" style="width : 250px; margin : auto;">
                <div>
                    <input type="mail" class="form-control" name="mail" placeholder="Adresse mail" style="width : 140px;" />
                </div>
                <div>
                    <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" style="width : 140px;" />
                </div>
                <br />
                <div>
                    <button type="submit" class="submit" style="font-size : 22px; width : 50px;">
                        Ok
                    </button>
                </div>
            </form>
        </section>

<?php
    require_once("assets/templates/footer.php");
?>