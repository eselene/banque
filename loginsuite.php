<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur notre site</title>

</head>

<body>
    <?php
    // var_dump($_POST);
    //qi l   method est GET  =>  $_GET
    // var_dump($_SESSION);
    if ($_SESSION['user']) {
        echo '<h1>Au menu du jour pour vous, ' . $_SESSION["user"] . "...</h1>";
        echo "<ul>";
        echo "  <li><a href='../'>Sommaire</a></li>";
        echo "  <li>Et aussi...</li>";
        echo "  <li>Et encore...</li>";
        echo "  <li>Et pour finir...</LI>";
        echo "</ul>";
    } else {
        echo '<h1> ERREUR login : vous n\'avez pas droit d\'accès à ce site</h1>';
        echo '<p><a href="login.htm">Retour à la page d\'accueil</a></p>';
    }
    ?>
</body>

</html>