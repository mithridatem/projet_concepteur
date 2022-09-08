<?php
class Manager_article extends Article
{
    public function add_article($bdd)
    {
        try {
            $req = $bdd->prepare("INSERT INTO article(name_art, content_art, date_art, id_type,image_art) VALUE
            (:name_art, :content_art, :date_art, :id_type, :image_art)");

            $req->execute([
                'name_art' => $this->get_name_art(),
                'content_art' => $this->get_content_art(),
                'date_art' => $this->get_date_art(),
                'id_type' => $this->get_id_type(),
                'image_art' => $this->get_image_art(),
            ]);
        } catch (Exception $e) {
            die('Erreur dans la requete:' . $e->getMessage());
        }
    }

    public function article_by_id($bdd, $id)
    {
        $req = $bdd->prepare("SELECT * FROM article WHERE id_art = :id_art ");
        $req->execute([
            'id_art' => $id,
        ]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }
    
    public function article_preview_by_id($bdd, $id){
        $req = $bdd->prepare("SELECT content_art FROM article WHERE id_art = :id_art ");
        $req->execute([
            'id_art' => $id,
        ]);
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }

    public function get_all_articles($bdd)
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
