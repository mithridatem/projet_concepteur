<?php
    class ManagerUtilisateur extends Utilisateur{
         //fonctions 
     function addUser($bdd){
        try{
            $req = $bdd->prepare("insert into utilisateur(name_util, first_name_util, mail_util, mdp_util, img_util, id_role) values
            (:name_util, :first_name_util, :mail_util, :mdp_util, :img_util, :id_role)");
            $req->execute(array(
                'name_util' => $this->get_name_util(),
                'first_name_util' => $this->get_first_name_util(),
                'mail_util' => $this->get_mail_util(),
                'mdp_util' => password_hash($this->get_mdp_util(), PASSWORD_DEFAULT),
                'img_util' => $this->get_img_util(),
                'id_role' => $this->get_id_role(),
            ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    function getAllUserbyMail($bdd):bool{
        try{
            $req = $bdd->prepare("SELECT * FROM utilisateur where mail_util =:mail_util limit 1");
            $req->execute(array(
                'mail_util'=>$_POST['mail_util'],
            ));
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            if(!empty($data)){
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
    function getUser($bdd):array{
        try{
            $req = $bdd->prepare("SELECT * FROM utilisateur where mail_util =:mail_util limit 1");
            $req->execute(array(
                'mail_util'=>$_POST['mail_util'],
            ));
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            if(!empty($data)){
                return $data;
            }
            else{
                return $data;
            }
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    
    function getAllUser($bdd):array{
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
?>