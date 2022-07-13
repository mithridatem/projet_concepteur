<?php 
$css = "all_article.css";
$content = "";
$nav = true;
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
                            $id = $k->id_art;
                            echo"
                            <div class='article' id=$id>
                                <h3>$titre</h3>
                                <h4>Du: $date</h4>
                                <h4>Catégorie:$type</h4>
                                <p>$content</p>
                            </div>";
                        }
                    ?>
            </div>
            <script>
                Array.from(document.getElementsByClassName('article')).forEach(
                    (e)=>{
                        console.log(e)
                        e.addEventListener('click', function(){
                            console.log(this.id)
                            document.location.href=`/projet/see_article?id=${this.id}`
                        })
                    }
                )
            </script>