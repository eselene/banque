 <!DOCTYPE html>
 <html lang="fr">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/styles.css" <title>
     <?php
        // $titrePage = 'Multiplication';
        // echo "<h2>$titrePage<h2> <br>"; 
        // $string = implode('     ', $_SERVER );
        // echo "$string";        
        ?>
     </title>

 </head>

 <body>

     <?php
        $day = ""; // Initialisation de la variable pour stocker le jour
        // Vérifier si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer la valeur du champ de texte
            $day = $_POST["day"];
        }

        ?>


     <h1>Formulaire PHP Auto-Référent</h2>
         <br> <!-- PHP_SELF -->
         <form method="post" action="<?php echo $_SERVER["SCRIPT_NAME"];   ?>">
             Jour : <input type="text" name="day" value="<?php echo $day; ?>"><br>
             <input type="submit" value="Soumettre">
         </form>
         <?php
            function verifier($d)
            {
                if (isset($_POST[$d])) {
                    $date = $_POST[$d];
                    echo "La valeur du champ est : " . $date . "<br>";

                    // Vérification du format jj/mm/aaaa
                    if (!preg_match("/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/(19|20)\d\d$/", $date)) {
                        echo "Erreur : Le format de la date est invalide. Veuillez utiliser le format jj/mm/aaaa.<br>";
                        return;
                    }

                    // Vérification de la validité de la date
                    list($jour, $mois, $annee) = explode('/', $date);
                    if (!checkdate($mois, $jour, $annee)) {
                        echo "Erreur : La date n'est pas valide.<br>";
                    }
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                verifier("day");
            }
            ?>
         ?>
 </body>

 </html>



 </body>

 </html>