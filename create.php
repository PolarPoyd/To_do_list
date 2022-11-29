<?php

session_start();


// vérification avant enregistrement, si l'info existe, on créer $variable = tâche reçue sinon, $variable = ''
$id = $_SESSION['User']['id_pseudo'];
$pseudo = $_SESSION['User']['pseudo'];
$task = htmlspecialchars($_POST['newTask']) ?? null;


// vérification des données avant enregistrement
if(
    !is_null($task) && strlen($task) < 255
) {
    try {
        require_once './cnxBDD.php';

        //Je determine mon modele de requete
        

        $req = $pdo -> prepare("INSERT into task values (NULL, :task, :id_pseudo)");
        $res = $req -> execute(
            [
            ':task' => $task,
            ':id_pseudo'=> $id,
        ]);

        $_SESSION['resultat']['message'] = 'enregistrement effectué avec succès';
        //$_SESSION['resultat']['type'] = 'success';

    } catch (PDOException $error) {
        $_SESSION['resultat']['message'] = 'Erreur PDO : ' .$error->getMessage();
        //$_SESSION['resultat']['type'] = 'danger';
        }
}else {
    $_SESSION['resultat']['message'] = 'Veuillez vérifier les informations renseignées sur le formulaire';
    //$_SESSION['resultat']['type'] = 'danger';
} 

header('Location:todolist.php');





?>