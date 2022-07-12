<?php
class UserManager extends User{
    public function create($bdd){
        try{
            $req = $bdd->prepare('INSERT INTO utilisateur (first_name_util, name_util, mail_util, mdp_util, img_util, statut_util) values (:first_name_util, :name_util, :mail_util, :mdp_util, :img_util, 0);');
            $req->execute([
                'name_util' => $this->name,
                'first_name_util' => $this->first_name,
                'mail_util' => $this->mail,
                'mdp_util' => $this->pwd,
                'img_util' => $this->img,
            ]);
    
        }
        catch(Exception $e){
            echo $e;
        }
    }
}
?>