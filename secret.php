<!DOCTYPE html>
<html>
    <head>
        <title>Porfolio M.H</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style-secret.css">
        <script src="java-secret.js" defer></script>
        <script src="https://d3js.org/d3.v7.min.js"></script>
    </head>
    <body onload="startTimer()"> 

        
        <button><a href="index.html">Retour</a></button>

        <div class="compte-a-rebours">
            <div class="timer">
                <h1>Compte à rebours</h1>
                <p>Temps restant : <span id="timer">05:00</span></p>
            </div>
            <script>
            var timeLeft = 300; // temps initial en secondes
            var timer;

            function startTimer() {
                clearInterval(timer); // arrêter un compte à rebours en cours s'il y en a un
                timer = setInterval(countdown, 1000); // lancer le compte à rebours
            }

            function countdown() {
                var minutes = Math.floor(timeLeft / 60);
                var seconds = timeLeft % 60;
                var timerElement = document.getElementById("timer");
                timerElement.innerHTML = (minutes < 10 ? "0" : "") + minutes + ":" + (seconds < 10 ? "0" : "") + seconds;
                timeLeft--;
                if (timeLeft < 0) {
                clearInterval(timer);
                // rediriger l'utilisateur vers une autre page après la fin du compte à rebours
                window.location.href = "index.html";
                }
            }
            </script>
            
        </div>
            
        

        <div class="glitch">
            <div class="glitch__img"></div>
        </div>
          
  </body>
</html>


<?php
$expire = 300;
session_set_cookie_params($expire);
session_start();



if (!isset($_SESSION['login'])) {

    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $expire)) {
        // Si la session a expiré, détruit toutes les variables de session et redirige l'utilisateur vers la page de connexion
        session_unset();
        session_destroy();
        header('Location: login.php');
        exit;
    }


    header('Location: login-secret.php'); // redirige l'utilisateur vers la page de connexion
    exit;
}
$_SESSION['LAST_ACTIVITY'] = time();
?>


