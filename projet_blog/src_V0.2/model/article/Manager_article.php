<?php
class Manager_article extends Article
{
    function add_article($bdd)
    {
        try {
            $req = $bdd->prepare("INSERT INTO article(name_art, content_art, date_art, id_type) VALUE
            (:name_art, :content_art, :date_art, :id_type)");

            $req->execute([
                'name_art' => $this->get_name_art(),
                'content_art' => $this->get_content_art(),
                'date_art' => $this->get_date_art(),
                'id_type' => $this->get_id_type(),

            ]);
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    function article_by_id($bdd, $id)
    {
        $req = $bdd->prepare("SELECT * FROM article WHERE id_art = :id_art ");
        $req->execute([
            'id_art' => $id,
        ]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }
    
    function get_all_articles($bdd)
    {
        try {
            $req = $bdd->prepare("SELECT * FROM article");
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_OBJ);
            return $data;
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }
}
