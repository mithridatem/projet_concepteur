<?php
    class ManagerArticle extends Article{
        //fonction ajouter un article
        public function addArticle($bdd, $date){
            try{
                $req = $bdd->prepare("insert into article(name_art, content_art, date_art) values
                (:name_art, :content_art, :date_art)");
                $req->execute([
                    'name_art' => $this->getNameArt(),
                    'content_art' => $this->getContentArt(),
                    'date_art' => $date,
                ]);
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }

?>