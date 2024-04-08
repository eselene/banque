 <!DOCTYPE html>
 <html lang="fr">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/styles.css">
     <?php
        $titrePage = 'Redirection après traitement';
        echo "<h1>$titrePage<h1> <br>";
        echo "<title> $titrePage </title>"
        ?>
     </title>
 </head>

 <body>
     <h2>Formulaire de validation d'email et password</h2>
     <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
         <label for="email">Adresse e-mail :</label><br>
         <input type="text" id="email" name="email"><br>
         <label for="password">Mot de passe :</label><br>
         <input type="password" id="password" name="password"><br><br>
         <input type="submit" value="Valider">
     </form>
     <?php
        // Fonction de validation d'email
        function validateEmail($email)
        {
            // Utilisation de la fonction filter_var() avec le filtre FILTER_VALIDATE_EMAIL
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }

        // Fonction de validation de mot de passe
        function validatePassword($password)
        {
            // On vérifie que le mot de passe contient au moins 8 caractères
            // Vous pouvez ajouter d'autres critères de validation selon vos besoins
            return strlen($password) >= 8;
        }

        // Traitement du formulaire
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($email) || empty($password)) {
                echo "Veuillez remplir tous les champs.";
            } else {
                if (validateEmail($email)) {
                    echo "L'adresse e-mail est valide.<br>";
                } else {
                    echo "L'adresse e-mail n'est pas valide.<br>";
                }

                if (validatePassword($password)) {
                    echo "Le mot de passe est valide.<br>";
                } else {
                    echo "Le mot de passe n'est pas valide.<br>";
                }
            }
        }
        ?>

 
 </body>

 </html>