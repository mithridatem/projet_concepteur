<?php

class Manager_comment extends Comment {
    function add_comment($bdd){
        try {
            $req = $bdd->prepare("INSERT INTO commenter(id_art, id_util, commentaire, date_commentaire) VALUE
            (:id_art, :id_util, :commentaire, :date_commentaire)");

            $this->set_date_commentaire(date('y-m-d h:m:s'));

            $req->execute([
                'id_art' => $this->get_id_art(),
                'id_util' => $this->get_id_util(),
                'commentaire' => $this->get_commentaire(),
                'date_commentaire' => $this->get_date_commentaire(),
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    function comment_by_id($bdd, $id)
    {
        $req = $bdd->prepare("SELECT * FROM commenter WHERE id_art = :id_art ");
        $req->execute([
            'id_art' => $id,
        ]);
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    function remove_comment($bdd){

    }
}