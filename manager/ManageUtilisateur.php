<?php

  class ManagerUtilisateur extends utilisateur{

    public function getNameArt():string{
      return strtoupper(parent::getNameUtil());
    }

    public function addUser($bdd, $file){
      try{
          $req = $bdd->prepare("insert into utilisateur(name_util, first_name_util, mail_util, mdp_util, img_util) values
          (:name_util, :first_name_util, :mail_util, :mdp_util, :img_util)");
          $req->execute(array(
              'name_util' => $_POST['name_util'],
              'first_name_util' => $_POST['first_name_util'],
              'mail_util' => $_POST['mail_util'],
              'mdp_util' => password_hash($_POST['mdp_util'], PASSWORD_DEFAULT),
              'img_util' => $file
          ));
      }
      catch(Exception $e)
      {
          //affichage d'une exception en cas d’erreur
          die('Erreur : '.$e->getMessage());
      }
    }


    public function getAllUserbyMail($bdd):bool{
      try{
          $req = $bdd->prepare("SELECT * FROM utilisateur where mail_util =:mail_util limit");
          $req->execute(array(
              'mail_util'=>$_POST['mail_util'],
          ));
          $data = $req->fetchAll(PDO::FETCH_OBJ);
          if(isset($data)){
              return true;
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


    public function getAllUser($bdd):array{
      try{
          $req = $bdd->prepare("SELECT * FROM utilisateur");
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
  }