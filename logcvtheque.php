<?php
    require_once("assets/templates/header.php");
?>

        <div class="wrap crumbread"><a href="index.php"><p>Accueil</p></a> <p> > </p> <a href="logcvtheque.php"><p>Connexion à l'espace CV</p></a></div>

        <section class="accueil wrap">
            <h2>Exposants, connecter-vous à l'espace de consultation de CV</h2>
            <form method="post" action="assets/php/loginCV.php" style="display: inline;" style="width : 250px; margin : auto;">
                <div>
                    <p>Veuillez saisir le code de sécurité : </p>
                    <input type="password" class="form-control" name="code" placeholder="Code de sécurité" style="width : 140px;" />
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