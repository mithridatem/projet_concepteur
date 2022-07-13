<?php
class ManagerCommenter extends Commenter{
    public function addCommentaire($bdd){
        try{
            $req = $bdd->prepare("insert into commenter
            (id_art, id_util, date_commentaire, commentaire) values
            (:id_art, :id_util, :date_commentaire, :commentaire)");
            $req->execute([
                'id_art' => $this->getIdArt(),
                'id_util' => $this->getIdUtil(),
                'date_commentaire' => $this->getDateCom(),
                'commentaire' => $this->getCom(),
            ]);
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }
    public function getAllCommentaire($bdd):array{
        try{
            $req = $bdd->prepare("SELECT * FROM commenter");
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