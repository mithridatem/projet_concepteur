<?php
    //import
    include './view/viewAllArticle.php';
    include './utils/connectBdd.php';
    include './model/article.php';
    include './manager/article.php';
    $art = new ManagerArticle();
    //boucle affichage de la liste des articles
    foreach($art->getAllArticle($bdd) as $value){
        $value->name_art."<br>";
    }
?>