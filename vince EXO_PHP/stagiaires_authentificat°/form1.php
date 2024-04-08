<?php
//initialiser variable (message à vide par défaut)
$msg = "";
$REQUEST_METHODE = $_SERVER['REQUEST_METHOD'];

//vérifier si formulaire a été soumis
if (($_SERVER)['REQUEST_METHOD'] == "POST") {
	// Étape 3 : Vérifie si les champs email et password sont définis et non vides
	if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
		// Étape 4 : Tableau des couples email/mot de passe valides
		$valid_credentials = array(
			"jean_valjean@academie.net" => "hugo",
			"steve_ostin@lesseries.org" => "3md",
			"david_banner@marvel.com" => "hulk"
		);
	} // Vérifie si les identifiants soumis correspondent à ceux dans le tableau
	if (array_key_exists($_POST['email'], $valid_credentials) && $valid_credentials[$_POST['email']] === $_POST['password']) {
		// Si l'identification réussit, redirige vers form2.php
		header("Location: form2.php");
		setcookie("form1_cookie", "autentificated", time() + 3600, "/");
		exit(); // Assure que le script s'arrête après la redirection
	} else {
		// Si les identifiants sont incorrects, définis un message d'erreur
		$msg = "Identifiants incorrects";
	}
} else {
	// Si tous les champs ne sont pas remplis, définis un message d'erreur
	$msg = "Saisie obligatoire";
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Redirection après Traitement</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css" />
</head>

<body>
	<h2>Identifiez-vous</h2>
	<br>
	<div class='MonTableau'>
		<form method="post">
			<table class='table table-bordered table-dark table-hover'>
				<tr>
					<td class="MonLabel">Email</td>
					<td><input type="text" name="email" autocomplete="false"></td>
				</tr>
				<tr>
					<td class="MonLabel">Mot de passe</td>
					<td><input type="password" name="password" value="" autocomplete="false"></td>
				</tr>
				<tr>
					<td></td>
					<td colspan="2"><input class="btn btn-sample" type="submit" name="cmd_valid" value="Valider">
						<input class="btn btn-sample" type="reset" id="reset" name="reset" value="Annuler">
					</td>
					<td><i id="message"><?php echo $msg; ?></i></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>