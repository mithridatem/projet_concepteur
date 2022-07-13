<?php
    //import
    include './utils/connectBdd.php';
    include './model/article.php';
    include './manager/article.php';
    include './view/viewAllArticle.php';
    $art = new ManagerArticle();
    //var_dump($art->getAllArticle($bdd));
    foreach($art->getAllArticle($bdd) as $value){
        echo '<a href="showArtById?id='.$value->id_art.'">'.$value->name_art."
        </a> date : ".$value->date_art. "<br>";
    }
?>