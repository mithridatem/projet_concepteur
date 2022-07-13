<?php
    class ManagerComment extends Comment{

    public function addCommment($bdd){
        try{
            $req = $bdd->prepare("INSERT INTO commenter(id_art, id_util, date_commentaire, commentaire) values
            (:id_art, :id_util, :date_commentaire, :commentaire)");
            $req->execute(array(
                'id_art' => $this->getId_art(),
                'id_util' => $this->getId_util(),
                'date_commentaire' =>  date('Y-m-d h:m:s'),
                'commentaire' => $this->getCommentaire()
            ));
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }

    public function getCommentByArticle($bdd){
        try{
            $req = $bdd->prepare("SELECT * FROM commenter where id_art =:id_art");
            $req->execute(array(
                'id_art'=>$this->getId_art(),
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

    public function getCommentByUser($bdd){
        try{
            $req = $bdd->prepare("SELECT * FROM commenter WHERE id_util =:id_util");
            $req->execute([
                'id'=>$this->id_util
            ]);
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            if(isset($data)){
                return $data;
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
}
?>