<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/connexion.css"/>
    <title>Sign in / Sign up</title>
</head>
<body>

<?php

if(isset($_GET['login_err']))
{
        $err = htmlspecialchars($_GET['login_err']);

        switch($err)
        {
                case 'password' :

                        ?>
                        <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Erreur</strong>Mot de passe incorrect.
                        </div>
                        <?php
                        break;


                case 'email' :

                        ?>
                        <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Erreur</strong>Email incorrect.
                        </div>
                        <?php
                        break;

                case 'already' :

                        ?>
                        <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Erreur</strong>Compte non existant.
                        </div>
                        <?php
                        break;
        }
}




?>


<div class="section">
<div class="container">

    <form action="connexion_traitement.php" method="post">

                <span class="login-logo"></span>
                <span class="login-title">SIGN IN</span>

        <div class="user">
            
                <label for="username" class="user-label">Username</label>
                <input type="text" class="user-input" name="pseudo" required>
            

        </div>

        <div class="password">

                <label for="password" placeholder="password" class="password-label">Password</label>
                <input type="password" class="password-input" name="password" required>

        </div>

        <div class="checkbox">

                <label for="checkbox" class="checkbox-label">Remember me</label>
                <input type="checkbox" name="remember">

        </div>

        <div class="button">

                <button type="submit">Login</button>

        </div>

    </form>

    <div class="link"><a href="./inscription.php">Créer un compte</a></div>



</div>
</div>
    
</body>
</html> 


