<?php
    //imports :
    include './model/article.php';
    include './manager/article.php';
    include './model/commentaire.php';
    include './manager/commentaire.php';
    include './utils/connectBdd.php';
    $com = new ManagerCommenter();
    //test si l'id de l'article existe
    if(isset($_GET['id']) AND !empty($_GET['id'])){
        $art = new ManagerArticle();
        $art->setIdArt($_GET['id']);
        $list = $art->getArticleById($bdd);
        echo '<h3>'.$list[0]->name_art.'</h3>';
        echo '<p>'.$list[0]->content_art.'</p>';
        echo '<p>'.$list[0]->date_art.'</p>';
    }
    if(isset($_POST['commentaire']) AND isset($_SESSION['connected'])){
        
        echo $_SESSION['id'] ."<br>";
        $com->setIdUtil($_SESSION['id']);
        $com->setIdArt($_GET['id']);
        $com->setCom(htmlspecialchars($_POST['commentaire']));
        $com->setDateCom(date('Y-m-d h:m:s'));
        $com->addCommentaire($bdd);
    }
    echo '<h4>liste des commentaire :</h4>';
    foreach($com->getAllCommentaire($bdd) as $value){
        echo "<p>
        $value->date_commentaire
        $value->commentaire</p>";
    }
    include './view/viewArticleById.php';  
?>