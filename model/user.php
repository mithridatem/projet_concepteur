<?php


class User{
    protected $first_name;
    protected $name;
    protected $mail;
    protected $pwd;
    protected $img="";

    public function __construct($first_name, $name, $mail, $pwd){
        $this->first_name = $first_name;
        $this->name = $name;
        $this->mail = $mail;
        $this->pwd = $pwd;

    }

    public function getName(){
        return $this->name;
    }
    
    public function getFirstName(){
        return $this->first_name;
    }

    public function getMail(){
        return $this->mail;
    }

    public function getPassword(){
        return $this->pwd;
    }

    public function getImage(){
        return $this->img;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    public function setFirstName($first_name){
        $this->first_name = $first_name;
    }

    public function setMail($mail){
        $this->mail = $mail;
    }

    public function setPassword($pwd){
        $this->pwd = $pwd;
    }

    public function setImage($img){
        $this->img = $img;
    }    
}


function getUser($bdd, $id){
    try{
        $req = $bdd->prepare('SELECT * FROM utilisateur where id_util=:id_util');
        $req->execute(
            array('id_util'=>$id)
        );
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    catch(Exception $e){
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}


function deleteUser($bdd){
    try{
        $req = $bdd->prepare('DELETE FROM utilisateur WHERE id_util=:id_util');
        $req->execute(array('id_util' => $_POST['id_util']));
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    catch(Exception $e){
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}


function userDoesExist($bdd){
    try{
        $req = $bdd->prepare('SELECT * FROM utilisateur WHERE mail_util=:mail_util');
        $req->execute(array('mail_util' => $_POST['mail_util']));
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return !empty($data);
    }
    catch(Exception $e){
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
?>