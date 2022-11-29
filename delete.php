<?php 
    //var_dump('salut');

session_start();


// vérification des données avant enregistrement

$id = $_SESSION['User']['id_pseudo'];
$pseudo = $_SESSION['User']['pseudo'];
$delete = intval($_POST['deleteBtn']) ?? 0; // on va chercher L'id


if($delete > 0){


    try{    
        require_once './cnxBDD.php';

        $sql="DELETE FROM task WHERE id_task = :task ";

        $req= $pdo->prepare($sql);
        $res= $req->execute(['task'=>$delete]);
        header('location:todolist.php');

    }catch(PDOException $error){
        $_SESSION['resultat']['message'] = 'Erreur PDO : ' .$error->getTraceAsString();
    }
}else{
    var_dump('marche po');
    //$_SESSION['resultat']['message'] = 'Veuillez vérifier les informations renseignées sur le formulaire';
    //$_SESSION['resultat']['type'] = 'danger';
}

//header('location:todolist.php');
