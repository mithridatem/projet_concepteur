<?php
    class Article{
        //attributs
        private $id_art;
        private $name_art;
        private $content_art;
        private $date_art;
        private $id_type;
        //constructeur
        public function __construct(){  
        }
        //getter and setter
        public function getIdArt():int{
            return $this->id_art;
        }
        public function getNameArt():string{
            return $this->name_art;
        }
        public function getContentArt():string{
            return $this->content_art;
        }
        public function getDateArt():string{
            return $this->date_art;
        }
        public function getIdType():int{
            return $this->id_role;
        }
        public function setIdArt($id):int{
            $this->id_art;
        }
        public function setNameArt($name){
            $this->name_art = $name;
        }
        public function setContentArt($content){
            $this->content_art = $content;
        }
        public function setDateArt($date){
            $this->date_art = $date;
        }
        public function setIdType($id){
            $this->id_type = $id;
        }
        
    }
    

    
    //fonction récupérer la liste des articles (tableau d'objets)
    function getAllArticle($bdd):array{
        try{
            $req = $bdd->prepare("SELECT * FROM article");
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    //fonction récupérer un article (tableau d'objet)
    function getArticleById($bdd,$id):array{
        try{
            $req = $bdd->prepare("SELECT * FROM article where id_art =:id_art");
            $req->execute(array(
                'id_art' =>$id,
            ));
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }   
?>