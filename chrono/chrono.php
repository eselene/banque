<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chronomètre avec son</title>
<script>
function countdown(minutes) {
    var seconds = 60;
    var mins = minutes;
    function tick() {
        var counter = document.getElementById("counter");
        var current_minutes = mins - 1;
        seconds--;
        counter.innerHTML = current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if (seconds > 0) {
            setTimeout(tick, 1000);
        } else {
            if (mins > 1) {
                setTimeout(function () {
                    countdown(mins - 1);
                }, 1000);
            } else {
                var audio = new Audio('taskFailed.mp3'); // Remplacez 'your-sound-file.mp3' par le chemin de votre fichier audio
                audio.play();
                alert("Le chronomètre est terminé !");
            }
        }
    }
    tick();
}
</script>
</head>
<body>
<div id="counter">20:00</div>
<button onclick="countdown(20)">Démarrer le chronomètre</button>
</body>
</html>
