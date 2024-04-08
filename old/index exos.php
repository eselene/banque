<?php
    $nom = "Dupont";
    $prenom = "Alfred";
?>

<?php
    $titrePage = "Intro au php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titrePage; ?></title>
</head>

<body>
    <?php
    for ($i=1; $i <6 ; $i++) {  
        echo "<h$i> Hello World !</h$i>";
    }
    echo '<br>';    
    ?>

    <!-- <?php echo "<h1> Bonjour $prenom $nom</h1>";
        echo '<br>';
        unset($nom); //pour detruire une variable, ex: sesstion
        //if(isset($nom)) { existe       n\'existe
        if (empty($nom)) {
            echo 'Oui, cette var est vide ';
        } else {
            echo 'Oui, cette var n\'est pas vide';
        }
        echo '<hr>';
    ?> -->
</body>

</html>