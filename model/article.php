<?php
     //fonctions 

     function addArticle($bdd){
        try{
            $req = $bdd->prepare("insert into article(name_art, content_art, date_art) values
            (:name_util, :first_name_util, :mail_util, :mdp_util, :img_util)");
            $req->execute(array(
                'name_art' => $_POST['name_art'],
                'content_art' => $_POST['content_art'],
                'date_art' => $_POST['date_art'],
            ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    
    function getAllArticle($bdd){
        try{
            $req = $bdd->prepare("SELECT * FROM article");
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            if(isset($data)){
                return $data;
            }
            else{
                return false;
            }
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    } 
    
    function getArticleById($bdd, $id){
        try{
            $req = $bdd->prepare("SELECT * FROM article WHERE id_art =:id");
            $req->execute(array(
              'id'=>$id
            ));
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            if(isset($data)){
              return $data;
          }
          else{
              return false;
          }
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }       
?>