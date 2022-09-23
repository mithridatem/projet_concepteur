<?php
ob_start();

?>
<main class="flex justify-center">
    <section class="flex flex-col items-start w-3/4 ">
        <article class="flex items-center mt-10">
        <button class="rounded-full bg-blue-800 text-white h-10 w-60 ">Gestion des catégories</button>
        <p class="ml-5">Ajout modification et suppression des categories</p>
        </article>
        <article class="flex items-center mt-10">
        <button class="rounded-full bg-blue-800 text-white h-10 w-60 ">Gestion des articles</button>
        <p class="ml-5" >Ajout modification et suppression des Articles</p>
        </article>
        <article class="flex items-center mt-10">
        <button class="rounded-full bg-blue-800 text-white h-10 w-60 ">Gestion des utilisateurs</button>
        <p class="ml-5" >Ajout modification et suppression des Utilisateurs</p>
        </article>
    </section>
</main>

<?php

$content = ob_get_clean();
require './vue/template.php';


?>