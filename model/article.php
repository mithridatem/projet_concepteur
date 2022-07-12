<?php
function addArticle($bdd){
    try{
        $req = $bdd->prepare('INSERT INTO article (name_art, content_art, date_art, id_type) values (:name_art, :content_art, :date_art, :id_type)');
        $req->execute(array(
            'name_art' => $_POST['name_art'],
            'content_art' => $_POST['content_art'],
            'date_art' => $_POST['date_art'],
            'id_type' => $_POST['id_type'],
        ));

    }
    catch(Exception $e){
        echo $e;
    }
}


function getAllArticle($bdd){
    try{
        $req = $bdd->prepare('SELECT article.name_art, article.date_art, article.content_art, type.name_type FROM article LEFT JOIN type ON article.id_type=type.id_type');
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    catch(Exception $e){
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}


function getArticle($bdd, $id_art){
    try{
        $req = $bdd->prepare('SELECT * FROM article WHERE id_art=:id_art');
        $req->execute(array(
            'id_art' => $id_art
        ));
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    catch(Exception $e){
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
?>