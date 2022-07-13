<?php
class UserManager extends User{
    public function create($bdd){
        try{
            $req = $bdd->prepare('INSERT INTO utilisateur (first_name_util, name_util, mail_util, mdp_util, img_util, statut_util, id_role) values (:first_name_util, :name_util, :mail_util, :mdp_util, :img_util, :statut_util, :id_role);');
            $req->execute([
                'name_util' => $this->name,
                'first_name_util' => $this->first_name,
                'mail_util' => $this->mail,
                'mdp_util' => password_hash($this->pwd, PASSWORD_DEFAULT),
                'img_util' => $this->img,
                'statut_util' => $this->statut_util,
                'id_role' => $this->id_role,
            ]);
    
        }
        catch(Exception $e){
            echo $e;
        }
    }
}
?>