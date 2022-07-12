<?php

class Manager_user extends User{
    function add_user($bdd, $img_path):VOID{
        try {
            $req = $bdd->prepare("INSERT INTO utilisateur(name_util, first_name_util, mail_util, mdp_util, img_util) VALUE
            (:name_util, :first_name_util, :mail_util, :mdp_util, :img_util)");
    
            $req->execute([
                'name_util' => $this->get_name_util(), 
                'first_name_util' => $this->get_first_name_util(),
                'mail_util' => $this->get_mail_util(),
                'mdp_util' => password_hash($this->get_mdp_util(), PASSWORD_DEFAULT),
                'img_util' => $this->get_img_util(),
            ]);
    
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
    function get_all_user($bdd):ARRAY{
        try {
            $req = $bdd->prepare("SELECT * FROM utilisateur");
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
    
    function verify_mail_exist($bdd):BOOL{
        try {
            $req = $bdd->prepare("SELECT * FROM utilisateur WHERE mail_util = :mail_util");
            $req->execute(array("mail_util"=>$this->get_mail_util()));
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            if(!empty($data)){
                return true;
            }else{
                return false;
            }
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
}


