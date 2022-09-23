<?php

class Master_article_controller{

    public function show_master_article(){
        $content_title = "Gestion des";
        $title = "Articles";

        include "./vue/Admin/master_view_article.php";

    }
}
