<?php
// Étape 1 : Vérifie si le cookie est présent
if (isset($_COOKIE['form1_cookie'])) {
	// Le cookie est présent, affiche un message de bienvenue
	$message = "Bienvenue sur votre portail @ ! Vous êtes identifié avec succès.";
} else {
	// Le cookie n'est pas présent, redirige vers form1.php
	header("Location: form1.php");
	exit(); // Assure que le script s'arrête après la redirection
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Présence du cookie</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css" />
</head>

<body>
	<<h1>Bienvenue</h1>
		<p><?php echo $message; ?></p>
</body>

</html>