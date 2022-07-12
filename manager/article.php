<?php
    class ManagerArticle extends Article{
        //redéfinition du getter
        public function getNameArt(){
           return strtoupper(parent::getNameArt());
        }
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
         //fonction récupérer la liste des articles (tableau d'objets)
         public function getAllArticle($bdd):array{
            try{
                $req = $bdd->prepare("SELECT * FROM article");
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
        //fonction récupérer un article (tableau d'objet)
        public function getArticleById($bdd,$id):array{
            try{
                $req = $bdd->prepare("SELECT * FROM article where id_art =:id_art");
                $req->execute([
                    'id_art' =>$id,
                ]);
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