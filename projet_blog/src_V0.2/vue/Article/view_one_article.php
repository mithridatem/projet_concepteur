<?php
    ob_start();
?>
<header>
    <img class="w-full h-40 object-contain" src="./dist/img/<?=$article_wanted->image_art?>" alt="">
</header>
<section class="flex flex-col text-left items-center w-4/5 mx-auto mt-20">
            <article class="columns-2">
                <?php foreach ($lines as $line) { ?>
                    <p> <?= $line ?> </p>
                <?php } ?>
            </article>
            <?php
            if (isset($_SESSION["connected"])) { ?>
                <a href="./addComment?id=<?= $_GET["id"] ?>">
                    <button class="rounded-full bg-blue-800 text-white h-10 w-60  mx-auto mt-5 ">Ajouter un commentaire</button>
                </a>
            <?php } else {
            ?>
                <a href="./connexion">
                    <button class="rounded-full bg-blue-800 text-white h-10 w-60  mx-auto mt-5 ">Me connecter pour ajouter un commentaire</button>
                </a>
            <?php } ?>
        </section>
        
<!-- Modification pour les commentaire l'appel de la méthode ne devrait pas être dans la vue  -->


<section class="flex flex-col items-center mt-5 w-full text-center">
            <h2 class="text-2xl">Commentaire :</h2>

            <?php
            foreach ($comment_wanted as $comment) { ?>
                <?php
                $id_util = $comment->id_util;

                $actual_user = $this->manage_user->user_by_id($this->bdd, $id_util);
                ?>
                <div class="p-6 w-1/3 lg:w-2/3  bg-white rounded-xl shadow-lg flex lg:flex-col lg:items-center lg:text-white space-x-4 mb-14 break-all ">
                    <div class="shrink-0">
                        <img class="h-12 w-12" src="./dist/img/<?= $actual_user->img_util ?>" alt="image de profil de <?= $actual_user->name_util ?>">
                    </div>
                    <div>
                        <div class="text-xl font-medium text-black"> <?= $actual_user->name_util ?> <?= $actual_user->first_name_util ?></div>
                        <p class="text-slate-500 "><?= $comment->commentaire ?></p>
                    </div>
                </div>
            <?php }
            ?>
        </section>

<?php 
$content = ob_get_clean();

require './vue/template.php';
?>
