<?php
class ArticleManager extends Article{
    function create($bdd){
        try{
            $req = $bdd->prepare('INSERT INTO article (name_art, content_art, date_art, id_type) values (:name_art, :content_art, :date_art, :id_type)');
            $req->execute([
                'name_art' => $this->name_art,
                'content_art' => $this->content_art,
                'date_art' => $this->date_art,
                'id_type' => $this->id_type,
            ]);
    
        }
        catch(Exception $e){
            echo $e;
        }
    }
}
?>