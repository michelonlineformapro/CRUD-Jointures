<?php
ob_start();


$content = ob_get_clean();
require "../index.php";
require "../datas/pdoconnexion.php";
?>

    <h1 class="text-center text-warning">NOS PRODUITS</h1>
    <div class="text-center">
        <hr>
        <a href="../views/addcd.php" class="btn btn-outline-success">Ajouter un CD</a>
        <br><br>
    </div>


    <?php

$dbh = readAll();
?>

