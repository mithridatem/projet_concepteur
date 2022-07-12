<?php 
$css = "all_article.css";
$content = "";
include 'view/template.php';
ob_start();
?>
            <div>
                <?php
                        include_once './utils/bdd.php';
                        $bdd = BDD::getBDD();
                        include "./model/article.php";
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