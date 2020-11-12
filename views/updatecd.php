<?php
ob_start();


$content = ob_get_clean();
require "../index.php";
require "../datas/pdoconnexion.php";

?>

    <div class="container">
        <h1 class="text-success">Mettre à jour un CD</h1>
        <form method="post" action="">

            <div class="form-group">
                <label for="nom">Titre de l'album</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="Arise">
            </div>

            <div class="form-group">
                <label for="auteur">Artiste de l'album</label>
                <input type="text" name="auteur" id="auteur" class="form-control" placeholder="Sepultura">
            </div>

            <div class="form-group">
                <label for="genre_id">Genre de musique</label>
                <select class="form-control" id="genre_id" name="genre_id">
                    <?php
                    $user = "root";
                    $pass = "";
                    $dbh = new PDO('mysql:host=localhost;dbname=multi', $user, $pass);
                    foreach ($dbh->query("SELECT * FROM genre") as $row){
                        ?>
                        <option value="<?= $row['id_genre'] ?>"><?= $row['genre'] ?></option>
                        <?php
                    }

                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="proprietaire_id">Propriétaire du CD</label>
                <select class="form-control" id="proprietaire_id" name="proprietaire_id">
                    <?php
                    $user = "root";
                    $pass = "";
                    $dbh = new PDO('mysql:host=localhost;dbname=multi', $user, $pass);
                    foreach ($dbh->query("SELECT * FROM proprietaires") as $row){
                        ?>
                        <option value="<?= $row['id_proprio'] ?>"><?= $row['nom_proprio'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="stock_id">En stock</label>
                <select class="form-control" id="stock_id" name="stock_id">
                    <?php
                    $user = "root";
                    $pass = "";
                    $dbh = new PDO('mysql:host=localhost;dbname=multi', $user, $pass);
                    foreach ($dbh->query("SELECT * FROM stock") as $row){
                        ?>
                        <option value="<?= $row['id_stock'] ?>"><?= $row['disponible'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <hr>
            <button type="submit" class="btn btn-outline-info">Mettre à jour le CD</button>
            <a href="allcd.php" class="btn btn-outline-danger">Retour</a>
            <hr>
        </form>
    </div>


<?php

$dbh = updateCd();