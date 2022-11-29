<?php 
session_start();

// vérification des données avant enregistrement
$pseudo = $_SESSION['User']['pseudo'];
$modifBtn = $_POST ['modifBtnValue'];
$modif = htmlspecialchars($_POST['modifBtn']) ?? null ;// on va chercher L'id

// var_dump($modif);


if ( 
    !empty($modif) && strlen($modif) < 50 &&
    $modifBtn > 0
) {
    try {
        require_once 'cnxBDD.php';

        // je détermine mon modele de requete
        $req = $pdo -> prepare("update task T set t.task = :task where id_task = :id_task");
        $stmt = $req -> execute([
            ':task' => $modif,
            ':id_task' => $modifBtn,
        ]); 
        $_SESSION['resultat']['message'] = 'mise a jour effectué avec succès';
        
        header('Location:todolist.php');


    } catch (PDOException $error) {
        $_SESSION['resultat']['message'] = 'Erreur PDO : '. $error -> getMessage();

    } 
} else {
    $_SESSION['resultat']['message'] = 'Vérifier les infos';
    
}
// header('Location:todolist.php');

?>