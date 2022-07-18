<?php
include './utils/connect_bdd.php';
include './model/Comment.php';
include './manager/Manager_comment.php';

$content_title = "Ajouter un";
$title = "Commentaire";

if(isset($_POST["commentaire"]) && isset($_SESSION['connected']) && isset($_GET['id'])){
    $new_comment = new Manager_comment($_GET["id"], $_SESSION['id'],htmlspecialchars($_POST["commentaire"]),null);
    $new_comment->add_comment($bdd);
    if(isset($_SESSION["temp_page"])){
        header('location: ' .$_SESSION["temp_page"] );
    }
}

include './vue/add_comment.php';
