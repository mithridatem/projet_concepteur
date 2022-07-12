<!DOCTYPE html>
<html>
    <head>
        <title>Ajouter Article</title>
        <link href="./css/all_article.css" rel="stylesheet" type="text/css">
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
                            echo"
                            <div>
                                <h3>$titre</h3>
                                <h4>Du: $date</h4>
                                <h4>Catégorie:$type</h4>
                                <p>$content</p>
                            </div>";
                        }
                    ?>
            </div>
    </body>