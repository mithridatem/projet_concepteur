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
?>