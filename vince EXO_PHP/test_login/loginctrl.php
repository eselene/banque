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
    <?php
    if (isset($_POST['nom']) && $_POST['nom'] != "") {
        echo $_SESSION['user'] = $_POST['nom'];
        header("location.loginsuite.php");
    } else {
        echo 'pas de nom';
    }

    ?>
</body>

</html>