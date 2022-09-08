<?php

require './utils/connect_bdd.php';
require './model/article/Article.php';
require './model/category/Category.php';
require './model/category/Manager_category.php';
require './model/article/Manager_article.php';
require './model/comment/Comment.php';
require './model/comment/Manager_comment.php';
require './model/user/Manager_user.php';
require './controller/Utils/Utils_controller.php';

class ArticleController
{
    private $new_article;
    private $manage_comment;
    private $manage_user;
    private $type;
    private $bdd;
    public function __construct()
    {
        $this->new_article = new Manager_article(null, null, null, null);
        $this->manage_comment = new Manager_comment(null, null, null, null);
        $this->manage_user = new Manager_user(null, null, null, null, null);
        $this->type = new Manager_type(null, null, null);
        $this->bdd = BDD::getBDD();
    }
    public function addArticle()
    {
        $content_title = "Ajouter un";
        $title = "Article";
        $flag = true;
        $error = "not";

        if (!isset($_SESSION['connected'])) {
            header('location: connexion?error=intedit');
        }

        #Récuperation de la date 
        #Verifier le contenus des input
        if (isset($_POST['submit'])) {
            $flag = false;
        }

        if((!$flag && empty($_POST['name-article'])) || (!$flag && empty($_POST['content-article']))){
            $error = "error";
        }

        if(!$flag){
            $path = Utils_controller::check_image("img-art");

            if ($path === "") {
                $path = "default.jpg";
                $entry_value = '<p  class="text-xl before:block before:absolute before:-inset-1 before:-skew-y-2 before:bg-red-600 relative inline-block " > <span class="relative text-white " >Image de profile par défaut</span> </p> ';
            }
        }

        if (!$flag && !empty($_POST['name-article']) && !empty($_POST['content-article'])) {
            if (empty($_POST['date-article'])) {
                $_POST['date-article'] = date("Y-m-d");
            }
            $new_article = new Manager_article($_POST['name-article'], $_POST['content-article'], $_POST['date-article'], 1);
            $new_article->set_id_type($_POST["id-type"]);
            $new_article->set_image_art($path);
            $new_article->add_article($this->bdd);
            $error = "ok";
        }

        $type = new Manager_type(null, null, null);

        $allTypes = $type->get_all_types($this->bdd);

        include './vue/Article/add_article.php';
    }

    public function show_article()
    {

        $_SESSION['temp_page'] = "article?id=" . $_GET["id"];

        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $continue = true;
        }

        if ($continue && $_GET['id'] !== null) {

            #Récuperation de l'articles et des commentaire si il existe
            $article_wanted = $this->new_article->article_by_id($this->bdd, $_GET['id']);
            $comment_wanted = $this->manage_comment->comment_by_id($this->bdd, $_GET['id']);

            if ($article_wanted) {
                $title = $article_wanted->name_art;
                $lines = explode(".", $article_wanted->content_art);
                $content_title = "";
            } else {
                header("location: ./404");
            }
   
        } else {
            header("location: ./articles");
        }

        require './vue/Article/view_one_article.php';

    }
    public function show_preview($id_art){
       $preview = $this->new_article->article_preview_by_id($this->bdd, $id_art);
        
       if($preview){
        $lines = explode(".", $preview->content_art);
       }
       return $lines[0];
    }
    public function show_all_articles(){
        $content_title = "Tous les";
        $title = "Articles";

        include "./vue/Article/view_all_articles.php";

    }

}
