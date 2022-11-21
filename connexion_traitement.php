<?php


require_once './cnxBDD.php';


if(isset($_POST['pseudo']) && isset($_POST['password']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']); // vire les caractères spéciaux pour envoyer en BDD ( ne les accepte pas)
    $password = htmlspecialchars($_POST['password']);
    
    $check = $pdo -> prepare('SELECT pseudo, email, password FROM utilisateurs WHERE pseudo = :pseudo');
    $check -> execute(['pseudo'=>$pseudo]);
    $data = $check->fetch();
    $row = $check->rowCount(); 

    if($row === 1) 
    {
        //if(filter_var($email, FILTER_VALIDATE_EMAIL))
        //{
            $password = hash('sha256', $password);
            
            if($data['password'] === $password)
            {
                session_start();
                $_SESSION['user'] = $data['pseudo'];
                header('Location:todolist.php');

            }else header('Location:connexion.php?login_err=password');

        //}else header('Location:connexion.php?login_err=email');

    }else header('Location:connexion.php?login_err=already');

}else header('Location:connexion.php');

 ?>