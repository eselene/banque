<?php
// Définir le temps initial
$temps_initial = time();

// Définir la durée de 20 minutes en secondes
$duree = 20 * 60;

// Boucle jusqu'à ce que la durée de 20 minutes soit écoulée
while (time() - $temps_initial < $duree) {
    // Afficher le temps écoulé en minutes et secondes
    $temps_ecoule = time() - $temps_initial;
    $minutes_ecoulees = floor($temps_ecoule / 60);
    $secondes_ecoulees = $temps_ecoule % 60;
    
    // Afficher le temps écoulé
    echo "Temps écoulé : $minutes_ecoulees minutes $secondes_ecoulees secondes\n";
    
    // Attendre 1 seconde avant la prochaine itération
    sleep(1);
}

echo "20 minutes écoulées!";
?>

