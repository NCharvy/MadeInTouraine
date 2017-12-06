<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Admin | MiT</title>
        <meta name="description" content="Page d'administration du site Made in Touraine" />
        <link rel="stylesheet" href="assets/css/styles.css" />
    </head>
    <body>
        <div class="cont-admin">
            <img src="assets/img/logo.png" />
            <header class="titre-co">
                <h2>Espace admin | Authentification</h2>
            </header>
            <form method="post" action="assets/php/login.php" class="form-admin">
                <div class="item-admin">
                    <input type="text" name="pseudo" required="required" size="40" placeholder="Identifiant" />
                </div>
                <div class="item-admin">
                    <input type="password" name="pass" required="required" size="40" placeholder="Mot de passe" />
                </div>
                <div class="item-admin">
                    <button type="submit">
                        Connexion
                    </button>
                </div>
                <?php
                    $_GET['error'] = null;
                    if($_GET['error'] == 1){
                        echo "<p style=\"color : red\">L'identifiant ou le mot de passe est incorrect !</p>";
                    }
                    else{
                        echo "";
                    }
                ?>
            </form>
            <a href="/equilateral_mit/index.php">Retour au site</a>
        </div>
    </body>
</html>