<?php
    require_once("assets/templates/header.php");
    require_once("assets/php/db.php");

    $sql = 'SELECT * FROM contact';
    $req = $bdd->query($sql);
    $contact = $req->fetchAll(PDO::FETCH_OBJ);
?>
        <section class="aux">
            <a href="index.php" class="alt-re">Retour</a>
        </section>
        <h2 style="text-align : center;">Données de contact</h2>
        <table>
            <tr>
                <th>Pseudo</th>
                <th>Sujet</th>
                <th>Contenu</th>
                <th>Mail</th>
            </tr>
            <?php
                foreach($contact as $c){
                    echo "<tr>
                            <td>$c->pseudo</td>
                            <td>$c->sujet</td>
                            <td>$c->contenu</td>
                            <td>$c->mail</td>
                        </tr>";
                }
            ?>
        </table>
    </body>
</html>