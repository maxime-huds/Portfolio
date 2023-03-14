
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style-login-secret.css">
    </head>
    <body>
        <div class="login">
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // récupérer les valeurs du formulaire
                $username = $_POST['username'];
                $password = $_POST['password'];

                // vérifier si le nom d'utilisateur et le mot de passe sont corrects
                if($username == "max" && $password == "max"){
                    // rediriger l'utilisateur vers une autre page
                    header("Location: secret.html");
                    exit;
                } else {
                    // afficher un message d'erreur si les informations de connexion sont incorrectes
                    $error_message = "Nom d'utilisateur ou mot de passe incorrect";
                }
            }
            ?>
            <form method="post">
                <input type="text" placeholder="Username" id="username" name="username">  
                <input type="password" placeholder="password" id="password" name="password">
                <input type="submit" value="Sign In">
            </form>
            <?php if(isset($error_message)){ ?>
                <p><?php echo $error_message; ?></p>
            <?php } ?>
        </div>
    </body>
</html>
