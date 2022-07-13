<?php

class Article{
    protected $name_art;
    protected $content_art;
    protected $date_art;
    protected $id_type;

    public function __construct($name, $content, $date, $id_type){
        $this->name_art = $name;
        $this->content_art = $content;
        $this->date_art = $date;
        $this->id_type = $id_type;
    }

    public function getName(){
        return $this->name_art;
    }
    
    public function getContent(){
        return $this->content_art;
    }

    public function getDate(){
        return $this->date_art;
    }

    public function setName($name){
        $this->name_art = $name;
    }

    public function setContent($content){
        $this->content_art = $content;
    }

    public function setDate($date){
        $this->date_art = $date;
    }
}


function getAllArticle($bdd){
    try{
        $req = $bdd->prepare('SELECT article.id_art, article.name_art, article.date_art, article.content_art, type.name_type AS name_type FROM article LEFT JOIN type ON article.id_type=type.id_type');
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
        $req = $bdd->prepare('SELECT article.id_art, article.name_art, article.date_art, article.content_art, type.name_type AS name_type FROM article LEFT JOIN type ON article.id_type=type.id_type WHERE article.id_art=:id_art');
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