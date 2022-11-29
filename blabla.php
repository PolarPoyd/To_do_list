<?php



(SELECT * FROM task WHERE id_pseudo = $_SESSION ['User']['id_pseudo'] )


//

INSERT INTO task VALUES (null, $task, $_SESSION ['User']['id_pseudo'] )



?>

