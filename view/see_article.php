<?php 
$css = "all_article.css";
$content = "";
$nav = true;
ob_start();
?>
            <div>
                <?php
                        include_once './utils/bdd.php';
                        $bdd = BDD::getBDD();
                        include "./model/article.php";
                        include "./model/comment.php";
                        if(!isset($_GET['id']))echo"Erreur! Sélectionner un article";
                        else{  
                            $id = $_GET['id'];
                            $data = getArticle($bdd, $id);
                            if(!empty($data)){

                                $titre = $data[0]->name_art;
                                $content = $data[0]->content_art;
                                $date = $data[0]->date_art;
                                $type = $data[0]->name_type;
                                $id = $data[0]->id_art;
                                echo"
                                <div class='article'>
                                    <h3>$titre</h3>
                                    <h4>Du: $date</h4>
                                    <h4>Catégorie:$type</h4>
                                    <p>$content</p>
                                </div>";
                                $comment = getComment($bdd,$id);
                                echo"<h3>Commentaire</h3>";
                                foreach($comment as $c){
                                    $date_comment = $c->date_commentaire;
                                    $user_comment = $c->first_name_util.' '.$c->name_util;
                                    $content_comment = $c->commentaire;
                                    echo"<div class='comment'>
                                    <h3>$user_comment</h3>
                                    <h4>Du: $date_comment</h4>
                                    <p>$content_comment</p>
                                    </div>";
                                }
                            }
                            if(isset($_SESSION['user'])){
                                echo'
                                <form action="" method="post">
                                    <h4>Commentaire:</h4>
                                    <textarea name="comment"></textarea>
                                    <input type="submit" name="submit" id="submit"/>
                                </form>';
                            }
                            

                        }
                        
                    ?>
            </div>