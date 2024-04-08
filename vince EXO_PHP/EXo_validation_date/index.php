<?php

function verifier($date)
{
    $message = "";
    $masque = "/^\d{1,2}\/\d{1,2}\/\d{4}$/";

    if (!preg_match($masque, $date)) {
        //1)preg_match pour vérifier si la date saisie respecte le regex(masque)
        $message = "Erreur : Le format de la date est incorrect.<br>";
    } else {
        $date_array = explode('/', $date);
        //explode permet de craquer la chaine de caractère date après chaque itération du '/'
        $jour = $date_array[0];
        $mois = $date_array[1];
        $annee = $date_array[2];
        //on peut utiliser list($jour,$mois,$annee) = explode('/', $date);

        if (!checkdate($mois, $jour, $annee)) {
            //2)vérifier si notre date est valide 
            $message = "Erreur : La date n'est pas valide.<br>";
        } else {
            $message = "La date est valide.<br>";
        }
    }

    return $message;
}


$msg = "";

if (isset($_POST['testDate'])) {
    $msg = verifier($_POST['testDate']);
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Validation Date</title><br>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
</head>

<body>
    <div class='MonTableau'>
        <h1>Validation Date</h1>
        <form method="post">
            <h2>Entrez une date</h2>
            <input type="text" name="testDate" placeholder="jj/mm/aaaa">
            <input class="btn btn-sample" type="submit" name="btnValid" value="Tester">
            <div><?php echo $msg; ?></div>
        </form>
    </div>
</body>

</html>