<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location:connexion.php');
}else {
    ?>
    <!DOCTYPE html>


    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./todolist.css">
        <script src="./javascript/todolist.js" defer></script>
        <title>To do list</title>
    </head>

    <body>
        <video class="background-video" autoplay loop muted src="./assets/video/vecteezy_abstract-kawaii-cool-sky-background-soft-gradient-pastel-comic-graphic_1806873.mp4">
        <source
            src="./assets/video/vecteezy_abstract-kawaii-cool-sky-background-soft-gradient-pastel-comic-graphic_1806873.mp4"
            type="video">
    </video>

        <div class="defilement">
            <div><?php echo $_SESSION['user']; ?>To do list</div>
        </div>


        <div class="container">
            <form class="form">

                <label for="newTask"></label>
                <input type="text" name="newTask" class="addTask" id="newTask" placeholder="Add task..">
                <button type="submit" id="addBtn" name="addBtn">=</button>
                <button id="theme"><a href="#"><span class="theme-name">dark</span></a></button>
                <a href="deconnexion.php">Déconnexion</a>


            </form>
        </div>
        <main>
            <div id="noteGrid">

                <!--  <div class="noteCard" id="noteCard">

                <div class="text">
                    <p class="noteText">Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit
                        amet consectetur adipisicing elit.</p>
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
    
}


