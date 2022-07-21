<?php
include './utils/connect_bdd.php';
include './model/Article.php';
include './manager/Manager_article.php';
include './model/Comment.php';
include './manager/Manager_comment.php';
include './model/User.php';
include './manager/Manager_user.php';

$_SESSION['temp_page'] = "article?id=".$_GET["id"];

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $continue = true;
}

if ($continue && $_GET['id'] !== null) {
    #Instaciation des Manager
    $new_article = new Manager_article(null, null, null, null);
    $manage_comment = new Manager_comment(null, null, null, null);

    #Récuperation de l'articles et des commentaire si il existe
    $article_wanted = $new_article->article_by_id($bdd, $_GET['id']);
    $comment_wanted = $manage_comment->comment_by_id($bdd, $_GET['id']);

    if ($article_wanted) {
        $content_title = "";
        $title = $article_wanted->name_art;
        ob_start();
        display_article($article_wanted);
        display_comment($comment_wanted, $bdd);
        $article_ob = ob_get_clean();
    } else {
        echo "l'article n'existe pas";
    }
    /**
     * TODO : AJOUTER ob pour envoyer l'article proprement à la vue
     */
} else {
    header("location: ./articles");
}

function display_article($article_wanted)
{
    $lines = explode(".", $article_wanted->content_art);
?>
    <section class="flex flex-col text-left items-center w-4/5 mx-auto mt-20">
        <article class="columns-2">
            <?php foreach ($lines as $line) { ?>
                <p> <?= $line ?> </p>
            <?php } ?>
        </article>
        <?php 
        if(isset($_SESSION["connected"])){ ?>
        <a href="./addComment?id=<?= $_GET["id"] ?>">
            <button class="rounded-full bg-blue-800 text-white h-10 w-60  mx-auto mt-5 ">Ajouter un commentaire</button>
        </a>
        <?php }else{ 
            ?>
            <a href="./connexion">
            <button class="rounded-full bg-blue-800 text-white h-10 w-60  mx-auto mt-5 ">Me connecter pour ajouter un commentaire</button>
        </a>
        <?php } ?>
    </section>
    <?php }

function display_comment($comment_wanted, $bdd)
{
    $manage_user = new Manager_user(null, null, null, null, null);
    ?>
    <section class="flex flex-col items-center mt-5 w-full text-center">
    <h2 class="text-2xl">Commentaire :</h2>

    <?php
    foreach ($comment_wanted as $comment) { ?>
    <?php
        $id_util = $comment->id_util;

        $actual_user = $manage_user->user_by_id($bdd, $id_util);
        ?>
        <div class="p-6 w-1/3 lg:w-2/3  bg-white rounded-xl shadow-lg flex lg:flex-col lg:items-center lg:text-white space-x-4 mb-14 break-all ">
            <div class="shrink-0">
                <img class="h-12 w-12" src="./dist/img/<?=$actual_user->img_util?>" alt="image de profil de <?= $actual_user->name_util?>">
            </div>
            <div >
                <div class="text-xl font-medium text-black"> <?= $actual_user->name_util?> <?= $actual_user->first_name_util?></div>
                <p class="text-slate-500 "><?=$comment->commentaire ?></p>
            </div>
        </div>
    <?php }
    ?>
    </section>
<?php }
include './vue/view_one_article.php';
