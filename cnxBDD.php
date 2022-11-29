<?php 
// permet d'afficher les erreurs    
ini_set('display_errors', 'On');
error_reporting(E_ALL);


// Caractéristique de la connexion 

$dsn = 'mysql:dbname=todolist;host=localhost;port=8889;charset=utf8';

// infos de connexion

$user = 'Adriano'; // root
$pwd = 'qo0EzOurA)2LnvT]'; // généré auto voir phpmyadmin

// Créer la connexion à la BDD 

$pdo = new PDO($dsn,$user,$pwd, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Permet d'afficher el mode verbeux pour error
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Lire les enregistrements comme un tableau
]);






?>