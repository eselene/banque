<?php
$nom = "Dupont";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titrePage; ?></title>
</head>

<body>
    <?php echo "<h1> Bonjour $nom </h1>";
    // var_dump(nom);

    echo '<br>';
    unset($nom); //le unset pour l'enlever

    if (isset($nom)) {
        echo 'Oui, cette variable existe';
    } else {
        echo 'Non, cette variable n\'existe pas';
    }
    ?>
    <?php

    for ($i = 5; $i >= 1; $i--) {
        echo "<h$i>Hello world!</h$i>";
    }

    foreach ($_SERVER as $key => $value) {
        echo $value;
        echo '<br>';
    }
    ?>


</body>

</html>