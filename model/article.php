<?php
     //fonctions 

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
          return $this->id_type;
      }
      public function setIdArt($id){
          $this->id_art = $id;
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
    // function addArticle($bdd){
    //     try{
    //         $req = $bdd->prepare("insert into article(name_art, content_art, date_art) values
    //         (:name_util, :first_name_util, :mail_util, :mdp_util, :img_util)");
    //         $req->execute(array(
    //             'name_art' => $_POST['name_art'],
    //             'content_art' => $_POST['content_art'],
    //             'date_art' => $_POST['date_art'],
    //         ));
    //     }
    //     catch(Exception $e)
    //     {
    //         //affichage d'une exception en cas d’erreur
    //         die('Erreur : '.$e->getMessage());
    //     }
    // }
    
    // function getAllArticle($bdd){
    //     try{
    //         $req = $bdd->prepare("SELECT * FROM article");
    //         $req->execute();
    //         $data = $req->fetchAll(PDO::FETCH_OBJ);
    //         if(!empty($data)){
    //             return $data;
    //         }
    //         else{
    //             return false;
    //         }
    //     }
    //     catch(Exception $e)
    //     {
    //         //affichage d'une exception en cas d’erreur
    //         die('Erreur : '.$e->getMessage());
    //     }
    // } 
    
    // function getArticleById($bdd, $id){
    //     try{
    //         $req = $bdd->prepare("SELECT * FROM article WHERE id_art =:id");
    //         $req->execute(array(
    //           'id'=>$id
    //         ));
    //         $data = $req->fetchAll(PDO::FETCH_OBJ);
    //         if(!empty($data)){
    //           return $data;
    //       }
    //       else{
    //           return false;
    //       }
    //     }
    //     catch(Exception $e)
    //     {
    //         //affichage d'une exception en cas d’erreur
    //         die('Erreur : '.$e->getMessage());
    //     }
    // }       
?>