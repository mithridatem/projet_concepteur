<!DOCTYPE html>
<html>
    <head>
        <title>Ajouter Article</title>
        <link href="./css/add_user.css" rel="stylesheet" type="text/css">
    </head>
    <body>
            <div>
                <?php
                        include "../utils/bdd.php";
                        include "../model/article.php";
                        
                        $data = getAllArticle($bdd);
                        foreach($data as $k){
                            $titre = $k->name_art;
                            $content = $k->content_art;
                            $date = $k->date_art;
                            $type = $k->name_type;
                            echo"<p>Titre:</p>
                            <p>$titre</p>
                            <p>Date:</p>
                            <p>$date</p>
                            <p>Catégorie:</p>
                            <p>$type</p>
                            <p>$content</p>";
                        }
                    ?>
            </div>
    </body>