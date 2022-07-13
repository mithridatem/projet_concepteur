<?php
    //imports :
    include './model/article.php';
    include './manager/article.php';
    include './utils/connectBdd.php';
    include './view/viewArticleById.php';

    if(isset($_GET['id']) AND !empty($_GET['id'])){
        $art = new ManagerArticle();
        $art->setIdArt($_GET['id']);
        $list = $art->getArticleById($bdd);
        echo '<h3>'.$list[0]->name_art.'</h3>';
        echo '<p>'.$list[0]->content_art.'</p>';
        echo '<p>'.$list[0]->date_art.'</p>';
    }    
?>