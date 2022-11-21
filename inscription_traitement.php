<?php 

require_once './cnxBDD.php';

if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']));
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password_retype = htmlspecialchars($_POST['password_retype']);

    $check = $pdo -> prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = :email');
    $check -> execute(['email'=> $email ]);
    $data = $check->fetch();
    $row = $check->rowCount(); // compter string 

    if($row == 0)
    {
        if(strlen($pseudo)<= 25)
        {
            if(strlen($email)<=100)
            {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    if($password == $password_retype)
                    {
                        $password = hash('sha256', $password);
                        $ip = $_SERVER['REMOTE_ADDR'];

                        $stmt = $pdo->prepare('INSERT INTO utilisateurs (pseudo, email, password) VALUES(:pseudo, :email, :password)');
                        $stmt -> execute([
                            'pseudo' => $pseudo,
                            'email' => $email,
                            'password' => $password
                        ]);
                        header('Location:connexion.php?reg_err=success');
                    }else header('Location:inscription.php?reg_err=password');

                }else header('Location:inscription.php?reg_err=emai');

            }else header('Location:inscription.php?reg_err=email_length');

        }else header('Location:inscription.php?reg_err=pseudo_length');

    }else header('Location:inscription.php?reg_err=already');

}


?>