<?php
    include './model/classe.php';
    include './manager/animal.php';

    $chat = new FonctionAnimal('cat', 150);
    echo $chat->vitesse();
    //var_dump($chat);
?>