<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h1>Login Suite</h1>

    <?php
    if (isset($_SESSION['user'])) {
        echo '<h1>Au menu du jour pour vous, ' . $_SESSION["user"] . "...</h1>";
        echo "<ul>";
        echo "  <li><a href='../'>Sommaire</a></li>";
        echo "  <li>Et aussi...</li>";
        echo "  <li>Et encore...</li>";
        echo "  <li>Et pour finir...</li>";
        echo "</ul>";
    } else {
        echo '<h1> ERREUR login : vous n\'avez pas droit d\'accès à ce site</h1>';
        echo '<p><a href="login.htm">Retour à la page d\'accueil</a></p>';
    }
