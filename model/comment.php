<?php

class Comment{
    protected $id_user;
    protected $content;
    protected $date;
    protected $id_art;

    public function __construct($id_user, $content, $id_art, $date){
        $this->date = $date;
        $this->content = $content;
        $this->id_art = $id_art;
        $this->id_user = $id_user;
    }

    public function getDate(){
        return $this->date;
    }

    public function getContent(){
        return $this->content;
    }

}

function getComment($bdd, $id){
    try{
        $req = $bdd->prepare('SELECT commenter.date_commentaire, commenter.commentaire, utilisateur.first_name_util, utilisateur.name_util FROM commenter LEFT JOIN utilisateur on commenter.id_util = utilisateur.id_util WHERE id_art=:id_art');
        $req->execute(array(
            'id_art' => $id
        ));
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    catch(Exception $e){
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
}
?>