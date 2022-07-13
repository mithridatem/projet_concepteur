<?php
class UserManager extends User{
    public function create($bdd){
        try{
            $req = $bdd->prepare('INSERT INTO utilisateur (first_name_util, name_util, mail_util, mdp_util, img_util, statut_util) values (:first_name_util, :name_util, :mail_util, :mdp_util, :img_util, :statut_util);');
            $req->execute([
                'name_util' => $this->name,
                'first_name_util' => $this->first_name,
                'mail_util' => $this->mail,
                'mdp_util' => password_hash($this->pwd, PASSWORD_DEFAULT),
                'img_util' => $this->img,
                'statut_util' => $this->id_role
            ]);
    
        }
        catch(Exception $e){
            echo $e;
        }
    }
}
?>