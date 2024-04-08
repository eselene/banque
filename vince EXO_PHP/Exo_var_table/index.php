<!-- Exercice 1 Déclarer 4 variables ayant pour valeur true, 42, 12.34 et 'Hello !'.
Afficher le type et la valeur de ces variables.-->
<?php

//Déclaration des variables
$var1 = true;
$var2 = 42;
$var3 = 12.34;
$var4 = 'Hello !';

//Affichage du type et de la valeur de chaque variable
echo "Variable 1 : Type = " . gettype($var1) . ", Valeur = " . var_export($var1, true) . "<br>";
echo "Variable 2 : Type = " . gettype($var2) . ", Valeur = " . var_export($var2, true) . "<br>";
echo "Variable 3 : Type = " . gettype($var3) . ", Valeur = " . var_export($var3, true) . "<br>";
echo "Variable 4 : Type = " . gettype($var4) . ", Valeur = " . var_export($var4, true) . "<br>";

?>
<!-- Exercice 2 Utiliser la boucle for pour afficher la page suivante en utilisant les balises h1, h2 …. :-->

<?php

for ($i = 5; $i >= 1; $i--) {
    echo "<h$i>Hello World !</h$i>";
}
?>
<!-- Exercice 3  -->
<!-- déclarer la variable $ceJour -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    date_default_timezone_set('Europe/Paris');
    $ceJour = getdate();

    // Récupérer la date le nom du serveur et l'heure
    echo "<h2>En ce $ceJour[mday] $ceJour[month] $ceJour[year], sur le serveur $_SERVER[SERVER_NAME], il est $ceJour[hours]h:$ceJour[minutes]mn</h2>"
    ?>
    <h3>Variable HTTP serveur ($_SERVER)</h3>
    <?php
    echo "<table border=1>";
    foreach ($_SERVER as $item => $valeur) {
        echo "<tr>";
        echo "<td>$item</td>";
        echo "<td>$valeur</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <br><br>

    <!-- Exercice 4 Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l’âge de la personne. Afficher toutes ces valeurs dans votre navigate ur. -->

    <?php
    //Création du tableau multidimensionnel associatiif

    $tab['Dupont'] = ['Gérard', 'Paris', 67];
    $tab['Badin'] = ['Aurélie', 'Nantes', 31];
    foreach ($tab as $keyLigne => $valueLigne) {
        echo "$keyLigne <br>";
        foreach ($valueLigne as $keyColonne => $valueColonne) {
            echo "Element $keyColonne : $valueColonne <br>";
        }
        echo '<br>';
    }
    ?>
    <!-- tableau de multiplication -->
    <table border=1>
        <?php

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <?php
    $array = array("foot", "bar", "hello", "world");
    var_dump($array);
    ?>
    <br><br>
    <?php

    // 1- Échange des valeurs de $a et $b en une seule instruction
    $a = 10;
    $b = 20;
    [$a, $b] = [$b, $a];
    echo "Après échange : \$a = $a, \$b = $b\n";

    //Lister les variables
    $a = 2;
    $b = 10;
    list($a, $b) = array($b, $a);
    echo "\$a = $a<br>";
    echo "\$b = $b<br>";


    // 2- Déclaration du tableau $pays
    $pays = array("France", "Allemagne", "Espagne");


    // 3- Affichage du tableau avec var_dump
    echo "Contenu du tableau \$pays : \n";
    var_dump($pays);

    // 4- Parcours du tableau avec une boucle for
    echo "Parcours du tableau avec une boucle for :\n";
    for ($i = 0; $i < count($pays); $i++) {
        echo "$pays[$i]\n";
    }

    // 5- Parcours du tableau avec une boucle foreach
    echo "Parcours du tableau avec une boucle foreach :\n";
    foreach ($pays as $pays_element) {
        echo "$pays_element\n";
    }

    // 6- La boucle do...while n'est pas appropriée car elle exécute son corps au moins une fois avant de vérifier la condition.
    //for($i = 0; $i < count($pays); $i++){
    // echo $pays[i].'<br>';
    //}

    // foreach ($pays as $key => $value) {
    // echo $value . '<br>';
    // }

    //$i = 0;
    //do{
    //echo $pays[$i].'<br>';
    // $i++;
    //}while($i < count($pays));

    // 7- Ajout des index sous forme de chaînes de caractères
    $pays["France"] = "Paris";
    $pays["Allemagne"] = "Berlin";
    $pays["Espagne"] = "Madrid";

    $pays = ['France', 'Allemagne', 'Espagne'];

    // 8- Valeur de l'expression count($pays)
    echo "Nombre d'éléments dans le tableau \$pays : " . count($pays) . "\n";

    // 9- Parcours du tableau pour afficher chaque pays et sa capitale
    echo "Affichage de chaque pays et sa capitale :\n";
    foreach ($pays as $pays_element => $capitale) {
        echo "$pays_element : $capitale\n";
    }

    // 10- Fonction enumerer
    function enumerer($t)
    {
        foreach ($t as $index => $valeur) {
            echo "$index : $valeur\n";
        }
    }

    // 11- Fonction ajouter
    function ajouter(&$t)
    {
        $t["Capitale"] = "Pays";
    }

    // Appel de la fonction ajouter
    ajouter($pays);

    // Affichage du tableau après l'exécution de la fonction
    echo "Après l'exécution de la fonction ajouter :\n";
    var_dump($pays);

    // 12- Conclusion après l'affichage du tableau
    echo "Conclusion : La fonction ajouter a ajouté un nouvel élément au tableau avec l'index 'Capitale' et la valeur 'Pays'.\n";

    ?>


    <?php
    $tab = [
        "php7@free.fr", "sacha8@gmail.com", "ariel3@wanadoo.fr",

        "webmestre@wanadoo.fr", "marcelduchamp9@gmail.com", "picasso69@gmail.com",

        "vangogh6@gmail.com", "matis63@free.fr", "degas45@wanadoo.fr"
    ];

    $tabFournisseurs = [];
    foreach ($tab as $key => $adresse) {
        $fournisseurs = explode('@', $adresse);
        $tabFournisseurs[] = $fournisseurs[1];
    }
    //var_dump(array_count_values($tabFournisseurs));
    $nbElements = count($tab);
    foreach (array_count_values($tabFournisseurs) as $key => $value) {
        echo "Fournisseur d\'accès : $key : " . round($value / $nbElements * 100, 2) . '%<br>';
    }

    ?>

    <?php
    // Démarre une nouvelle session ou reprend une session existante
    session_start();

    // Stocke des données dans la variable de session
    $_SESSION['user_id'] = 123;
    $_SESSION['username'] = 'utilisateur123';

    // Utilise les données de la variable de session
    echo 'Bonjour, ' . $_SESSION['username'];

    // Détruit une variable de session spécifique
    unset($_SESSION['user_id']);

    // Détruit toutes les variables de session
    session_unset();

    // Détruit la session
    session_destroy();
    ?>

</body>

</html>