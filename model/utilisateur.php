<?php
    // class Utilisateur{
        /*--------------------------------------------------
                            Attributs
        --------------------------------------------------*/
    //     private $id_util;
    //     private $name_util;
    //     private $first_name_util;
    //     private $mail_util;
    //     private $mdp_util;
    //     private $img_util;
    //     private $statut_util;
    //     private $id_role;
    //     /*--------------------------------------------------
    //                     Getters And Setters
    //     --------------------------------------------------*/
    //     //GETTERS
    //     public function getIdUtil(){
    //         return $this->id_util;
    //     }
    //     public function getNameUtil(){
    //         return $this->name_util;
    //     }
    //     public function getFirstNameUtil(){
    //         return $this->first_name_util;
    //     }
    //     public function getMailUtil(){
    //         return $this->mail_util;
    //     }
    //     public function getMdpUtil(){
    //         return $this->mdp_util;
    //     }
    //     public function getImgUtil(){
    //         return $this->id_util;
    //     }
    //     public function getStatutUtil(){
    //         return $this->statut_util;
    //     }
    //     public function getIdRole(){
    //         return $this->id_role;
    //     }
        
        
    // }

?>

<?php
     //fonctions 
     function addUser($bdd, $file){
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
    function getAllUserbyMail($bdd):bool{
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
?>