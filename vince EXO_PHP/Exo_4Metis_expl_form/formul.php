<?php
/* Manipulation de données d'un formulaire HTML envoyé via la méthode POST.
Il capture les informations envoyées par le formulaire, les traite et les intègre dans une requête SQL pour les insérer dans une base de données. */

// 1 - Initialisation des variables :
$interet = " "; // Initialise une variable pour stocker les intérêts sélectionnés.
$maRequete = "insert into Matable values("; // Initialise la requête SQL d'insertion dans la base de données.

// 2 - Construction de la requête SQL :
$maRequete .=  "'" . $_POST['nom'] . "'," . $_POST['age'] . ",'" . $_POST['marit'] . "',"; // Ajoute les valeurs du formulaire à la requête SQL.

// 3 - Traitement des intérêts (cases à cocher) :
if (isset($_POST['internet'])) { // Vérifie si la case "internet" est cochée.
    $maRequete .= "1,"; // Si oui, ajoute 1 à la requête SQL.
    $interet .= " à Internet,"; // Ajoute l'intérêt "Internet" à la variable $interet.
} else {
    $maRequete .= "0,"; // Si non, ajoute 0 à la requête SQL.
}

if (isset($_POST['micro'])) { // Vérifie si la case "micro" est cochée.
    $maRequete .= "1,"; // Si oui, ajoute 1 à la requête SQL.
    $interet .= ($interet == " ") ? " à la micro-informatique," : " la micro-informatique,"; // Ajoute l'intérêt "micro-informatique" à la variable $interet.
} else {
    $maRequete .= "0,"; // Si non, ajoute 0 à la requête SQL.
}

if (isset($_POST['jeux'])) { // Vérifie si la case "jeux" est cochée.
    $maRequete .= "1)"; // Si oui, ajoute 1 à la requête SQL et termine la requête.
    $interet .= " aux jeux video."; // Ajoute l'intérêt "jeux video" à la variable $interet.
} else {
    $maRequete .= "0)"; // Si non, ajoute 0 à la requête SQL et termine la requête.
}

// Gestion des cas où aucun intérêt n'est sélectionné ou lorsque le dernier intérêt se termine par une virgule.
if ($interet == " à") {
    $interet = " à rien (dommage...)."; // Si aucun intérêt n'est sélectionné, met à jour la variable $interet.
}

if (substr($interet, -1) == ',') {
    $interet = substr($interet, 0, -1) . '.'; // Si le dernier intérêt se termine par une virgule, supprime-la.
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un petit formulaire</title>
</head>

<body>
    <!-- Affichage des résultats dans la page HTML : -->
    <?php
    // Affichage des résultats du formulaire dans la page HTML.
    echo '<h1>Merci à vous, ' . $_POST['nom'] . '</h1>';
    echo '<p>Vous avez donc le bel âge de <b>' . $_POST['age'] . '</b> ans, vous êtes <b> ' . $_POST['marit'] . '</b></p>';
    echo "<p>et vous vous intéressez <b>$interet</b></p>";

    echo "<p>Je m'empresse d'envoyer la requête :<br><b>$maRequete</b><br> à notre base données.</p>";
    ?>
</body>

</html>
