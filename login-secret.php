
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
            session_start();
            
            try{
                    $pdo=(new PDO('mysql:host=localhost;charset=utf8;dbname=logs','root',''));
                }
            catch (Exception $e){
                die ("erreur : ".$e->getMessage());
            }
            
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                // récupérer les valeurs du formulaire
                $username = $_POST['username'];
                $password = $_POST['password'];
                $_SESSION['login'] = $username;

                // vérifier si le nom d'utilisateur et le mot de passe sont corrects
                
                if (isset($username) && isset($password)){
                    $sql=("SELECT * FROM infos WHERE login='$username' AND mdp='$password'");
                    session_start();
                    $account= $pdo->prepare($sql);
                    $account->execute();
                    $acc=$account->fetchAll();
                
                    $nbr_lignes=count($acc);
                    if ($nbr_lignes==1){
                        foreach($acc as $a)
                        header('Location: secret.php');
                        exit();
                    }
                    else{
                    }
                }
            }
            ?>
            <form method="post">
                <input type="text" placeholder="Username" id="username" name="username">  
                <input type="password" placeholder="password" id="password" name="password">
                <input type="submit" value="Sign In">
            </form>
        </div>
    </body>
</html>
