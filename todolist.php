<?php
session_start();
    ?>
<!DOCTYPE html>


<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/todolist.css">
    <script src="./javascript/todolist.js" defer></script> 
    <title>To do list</title>
</head>

<body>
    <video class="background-video" autoplay loop muted
        src="./assets/video/vecteezy_abstract-kawaii-cool-sky-background-soft-gradient-pastel-comic-graphic_1806873.mp4">
        <source
            src="./assets/video/vecteezy_abstract-kawaii-cool-sky-background-soft-gradient-pastel-comic-graphic_1806873.mp4"
            type="video">
    </video>

    <div class="defilement">
        <div><?php echo $_SESSION['User']['pseudo']."'s "; ?>To do list</div>
    </div>


    <div class="container">
        <form class="form" action="create.php" method="post">

            <label for="newTask"></label>
            <input type="text" name="newTask" class="addTask" id="newTask" placeholder="Add task..">
            <button type="submit" id="addBtn" name="addBtn">=</button>
            <button id="theme"><a href="#"><span class="theme-name">dark</span></a></button>
            <div class="a"><a href="deconnexion.php" style="color: black">Log out</a></div>


        </form>
    </div>
    <main>
        <div id="noteGrid">
            <?php
                if(isset($_SESSION['User'])){
                    require_once 'cnxBDD.php';
                    $pseudo=$_SESSION['User']['id_pseudo'];
            $stmt = $pdo->query("SELECT * FROM task WHERE id_pseudo = '$pseudo'");
            $tasks = $stmt->fetchAll();

            foreach ($tasks as $task){
                // var_dump($task['task']);
            echo 
            "
            
            <div class='noteCard'id='noteCard' name='noteCard'>
            <form action='update.php' method='post'>

            <div class='text'>
            <p class='pas-cacher' id='pTask_{$task['id_task']}'>{$task['task']}</p>
            <input class='cacher' type='text' name='modifBtn' value='{$task['task']}' id='modif_{$task['id_task']}'>
            <input type='hidden' name='modifBtnValue' value='{$task['id_task']}'>


           
            </div>

           <div class='buttons'>

                <button class='modifBtn pas-cacher' id='modifBtn_{$task['id_task']}'> K </button>
                <button class='cacher' type='submit' id='validBtn_{$task['id_task']}'>valider</button>
                </form>

                <form action='delete.php' method='post'>
                <input type='hidden' name='deleteBtn' value='{$task['id_task']}'>
                <button type='submit' id='deleteBtn'> E </button>
               </form>
       </div>

        </div>
        ";
     }}
      ?>

            <!--  <div class="noteCard" id="noteCard">

                <div class="text">
                    <p class="noteText">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit
                        amet consectetur adipisicing elit.</p>
                        <p class='noteText'>$task[task]</p> 
                </div>

                <div class="buttons">

                    <button type="button" id="modifBtn"> K </button>

                    <button type="button" id="deleteBtn"> E </button>

                </div>

            </div>-->

        </div>
    </main>


</body>

</html><?php
    