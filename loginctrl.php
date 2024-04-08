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
   if (isset($_POST['nom'] )) {
    $_SESSION['user'] = $_POST('nom'); //cr d'une clé () user) dns mon tablebl
    header("location:loginsuite.php");//redirection
    # code...
   }
    ?>

</body>

</html>