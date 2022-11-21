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

if(isset($_GET ['reg_err']))
{
        $err = htmlspecialchars($_GET['reg_err']);

        switch($err)
        {
                case 'success':
                        ?>
                        <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Succès</strong>Inscription réussie.
                        </div>
                        <?php
                        break;

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
                        <strong>Erreur</strong>Email non valide.                                
                        </div>
                        <?php
                        break;

                case 'email_length' :
                        ?>
                        <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Erreur</strong>Email trop long.
                        </div>
                        <?php
                        break;

                case 'pseudo_length' :

                        ?>
                        <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Erreur</strong>Pseudo trop long.                                
                        </div>
                        <?php
                        

                case 'already' :

                        ?>
                        <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Erreur</strong>Compte déjà existant.
                        </div>
                        <?php
                        
        }
}



?>


<div class="section">
<div class="container">

    <form action="inscription_traitement.php" method="post">

                <span class="login-logo"></span>
                <span class="login-title">SIGN UP</span>


        <div class="email">

                <label for="email" class="email-label">Email</label>
                <input type="text" class="email-input" name="email" required>

        </div>

        <div class="user">
            
                <label for="username" class="user-label">Username</label>
                <input type="text" class="user-input" name="pseudo" required>
            

        </div>

        <div class="password">

                <label for="password" placeholder="password" class="password-label">Password</label>
                <input type="password" class="password-input" name="password" required>

        </div>

        <div class="password">

                <label for="password" placeholder="password" class="password-label">Confirm password</label>
                <input type="password" class="password-input" name="password_retype" required>

        </div>

        <div class="button">

                <button type="submit">Create account</button>

        </div>

    </form>

</div>
</div>
    
</body>
</html> 