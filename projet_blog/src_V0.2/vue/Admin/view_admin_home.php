<?php
ob_start();

?>
<main class="flex justify-center">
    <section class="flex flex-col items-start w-3/4 ">
        <article class="flex items-center mt-10">
            <a href="admin-articles">
                <button class="rounded-full bg-blue-800 text-white h-10 w-60 ">Gestion des articles</button>
                </a>
                <p class="ml-5">Ajout modification et suppression des Article</p>
           
        </article>

        <article class="flex items-center mt-10">
            <a href="admin-categorie">
                <button class="rounded-full bg-blue-800 text-white h-10 w-60 ">Gestion des catégories</button>
                </a>
                <p class="ml-5">Ajout modification et suppression des catégories</p>
            
        </article>

        <article class="flex items-center mt-10">
            <a href="admin-utilisateur">
                <button class="rounded-full bg-blue-800 text-white h-10 w-60 ">Gestion des utilisateurs</button>
                </a>
                <p class="ml-5">Ajout modification et suppression des Utilisateurs</p>

        </article>
    </section>
</main>

<?php

$content = ob_get_clean();
require './vue/template.php';


?>