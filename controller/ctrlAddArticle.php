<?php
    $date = date("Y-m-d");
    include './utils/connectBdd.php';
    include './model/article.php';
    include './manager/article.php';
    include './model/type.php';
    include './manager/type.php';
    include './view/viewAddArticle.php';
    
    //test connexion
    if(!isset($_SESSION['connected'])){
        header('location: connexion?error=interdit');
    }
    //test si submit à été cliqué
    if(isset($_POST['bt'])){
        //test si les champs sont remplis
        if(!empty($_POST['name_art']) AND !empty($_POST['content_art']) ){
            $art = new ManagerArticle();
            $art->setNameArt($_POST['name_art']);
            $art->setcontentArt($_POST['content_art']);
            $art->setIdType($_POST['id_type']);
            //test si date vide
            if(empty($_POST['date_art'])){
                $date_art = $date;
                $art->addArticle($bdd, $date_art);
                echo "article : ".$art->getNameArt(). " date : " .$date_art; 
            }
            //si l'utilisateur à choisi une date
            else{
                $date_art = $_POST['date_art'];
                $art->addArticle($bdd, $date_art);
                echo "article : ".$art->getNameArt(). " date : " .$date_art; 
            }
        }
        //test si les champs ne sont pas remplis
        else{
            echo "veuillez remplir tous les champs de formulaire";
        } 
    }
    //si le bouton Envoyer n'est pas cliqué
    else{
        echo "veuillez compléter le formulaire";
    }
?>