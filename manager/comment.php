<?php
class CommentManager extends Comment{
    function create($bdd){
        try{
            $req = $bdd->prepare('INSERT INTO commenter (id_art, commentaire, date_commentaire, id_util) values (:id_art, :content, :date, :id_user)');
            $req->execute([
                'id_art' => $this->id_art,
                'content' => $this->content,
                'date' => $this->date,
                'id_user' => $this->id_user,
            ]);
    
        }
        catch(Exception $e){
            echo $e;
        }
    }
}
?>