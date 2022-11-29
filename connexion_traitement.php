<?php

$pseudo = $_POST['pseudo'] ?? null;
$password = $_POST['password'] ?? null;
$password = htmlspecialchars($password);

// vérifie si l'email et le mot de passe ne sont pas vides
if (!is_null($password) && !is_null($pseudo)) {

require_once './cnxBDD.php';

    var_dump('salut');
    
    $check = $pdo -> prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
    if($check -> execute(['pseudo'=> $pseudo])){
    var_dump('salut execute');

    if($check -> rowCount() === 1) {
    var_dump('salut rowCount');

        $data = $check->fetch(); // je récupère une seule ligne de ma table pas toute (=/ fetch all)
        
        if (password_verify($password, $data["password"])) {
    var_dump('salut check');

            // démarre ma session si le mot de passe est correct
            session_start();
            $_SESSION['User'] = $data;
            header('Location:./todolist.php');
        } else {
            // le nom d'utilisateur n'existe pas je le redirige 
            header('Location:connexion.php');
            

        }
       }
     }
        
    }        else {
        // le nom d'utilisateur n'existe pas je le redirige 
        header('Location:connexion.php');
    }
    