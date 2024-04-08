 <!DOCTYPE html>
 <html lang="fr">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/styles.css">
     <?php
        $titrePage = 'Validation Date';
        echo "<h1>$titrePage<h1> <br>";
        echo "<title> $titrePage </title>"
        ?>
     </title>
 </head>

 <body>
     <div class="Mon tableau"></div>
     <?php
        $day = ""; // Initialisation de la variable pour stocker le jour
        // Vérifier si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer la valeur du champ de texte dns var $day
            $day = $_POST["testDate"];
            echo "<h1>Validation de dates </h1>";
        }
        ?>

     <h1>Formulaire PHP Auto-Référent</h1>
     <br> <!-- PHP_SELF -->
     <form method="post" action="<?php echo $_SERVER["SCRIPT_NAME"];   ?>">
         <h2>Entrer une date : </h2>
         <input type="text" name="testDate" placeholder="dd/mm/yyyy" value="<?php echo $day; ?>"><br>
         <input type="submit" value="Tester">
         <!-- <div><?php echo $msg; ?></div>          -->
     </form>
     <?php
        function verifier($d)
        {
            if (isset($_POST[$d])) {
                $date = $_POST[$d];
                $msge = '';
                // Vérification du format jj/mm/aaaa
                // if (!preg_match("/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/(19|20)\d\d$/", $date)) {
                //methode 1 avec regEdit
                if (!preg_match("/^\d{1,2}\/\d{1,2}\/\d{4}$/", $date)) {
                    $msge = 'Erreur : Le format de la date est invalide. Veuillez utiliser le format jj/mm/aaaa';
                } else {
                    $msge = 'Validation OK';
                }
                return $msge;

            }
        } // fin Fn

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo 'La valeur du champ est '.$day. "<br>";
            echo  "<br>".  verifier("testDate");
        }
        ?>
 </body>
 <!-- //methode 2: Validate a Gregorian date       
                //avec function checkdate(int $month, int $day, int $year): bool {                     
                // list($jour, $mois, $annee) = explode('/', $date);
                // if (!checkdate($mois, $jour, $annee)) {
                //     echo "Erreur : La date n'est pas valide.<br>";
                // } -->
 </html>