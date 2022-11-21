<?php


// require_once './cnxBDD.php';
 var_dump("yo");

// if(isset($_POST['email']) && isset($_POST['password']))
// {
//     $email = htmlspecialchars($_POST['email']);
//     var_dump("yo");
//     $password = htmlspecialchars($_POST['password']);
    
//     $check = $pdo->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
//     $check -> execute(array($email));
//     $data = $check->fetch();
//     $row = $check->rowCount(); 

//     if($row === 1) 
//     {
//         if(filter_var($email, FILTER_VALIDATE_EMAIL))
//         {
//             $password = hash('sha256', $password);
            
//             if($data['password'] === $password)
//             {
//                 session_start();
//                 $_SESSION['user'] = $data['pseudo'];
//                 var_dump("yo");
//                 header('Location:todolist.php');

//             }else header('Location:connexion.php?login_err=password');

//         }else header('Location:connexion.php?login_err=email');

//     }else header('Location:connexion.php?login_err=already');

// }else header('Location:connexion.php');


// ?>