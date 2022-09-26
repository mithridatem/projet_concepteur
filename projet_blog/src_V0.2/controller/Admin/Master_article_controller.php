<?php

class Master_article_controller{

    public function show_master_article(){
        $content_title = "Gestion des";
        $title = "Articles";

        # Refacto à faire bonne pratique le __DIR__ donne le chemin courant
        require_once __DIR__ . "/../../vue/Admin/master_view_article.php";

    }
}
