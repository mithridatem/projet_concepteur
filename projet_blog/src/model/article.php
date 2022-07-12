<?php
//POST
function add_article($bdd)
{
    try {
        $req = $bdd->prepare("INSERT INTO article(name_art, content_art, date_art) VALUE
        (:name_art, :content_art, :date_art)");

        $req->execute([
            'name_art' => $_POST['name_art'],
            'content_art' => $_POST['content_art'],
            'date_art' => $_POST['date_art'],
        ]);
    } catch (Exception $e) {
        die('Erreur dans la requete:' . $e->getMessage());
    }
}

//GET
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

function article_by_id($bdd, $id)
{
    $req = $bdd->prepare("SELECT * FROM article WHERE id_art = :id_art ");
    $req->execute([
            'id_art' => $id,
        ]);
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}
