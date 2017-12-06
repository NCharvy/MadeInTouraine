<?php
    require_once("assets/templates/header.php");
    require_once("assets/php/db.php");

    $sql = 'SELECT * FROM etudiant';
    $req = $bdd->query($sql);
    $etu = $req->fetchAll(PDO::FETCH_OBJ);
?>
        <section class="aux">
            <a href="index.php" class="alt-re"><-</a>
        </section>
        <h2 style="text-align : center;">Informations des étudiants</h2>
        <table>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Ville</th>
                <th>Code postal</th>
                <th>Disponible du</th>
                <th>Au</th>
                <th>Transport</th>
            </tr>
            <?php
                foreach($etu as $e){
                    echo "<tr>
                            <td>$e->prenom</td>
                            <td>$e->nom</td>
                            <td>$e->ville</td>
                            <td>$e->cp</td>
                            <td>$e->dispo</td>
                            <td>$e->dispo2</td>
                            <td>$e->transport</td>
                        </tr>";
                }
            ?>
        </table>
    </body>
</html>