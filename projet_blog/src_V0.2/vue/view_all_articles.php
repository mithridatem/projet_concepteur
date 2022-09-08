<?php ob_start(); ?>
 <section class="flex flex-wrap justify-around text-center ">
<?php

foreach ($this->new_article->get_all_articles($this->bdd) as $article) {
     $actual_type = $this->type->get_one_type($this->bdd, $article->id_type);
?>

     <section class="relative mt-20 ">
     <img src="./dist/img/<?= $actual_type->img_type ?>" alt="" class=" w-[600px] max-h-[240px] mx-auto  object-cover object-center">

     <a href="./article?id=<?= $article->id_art ?>" class="text-6xl"><?= $article->name_art ?></a>

     </section>

<?php }

?>
</section>

<?php
$content = ob_get_clean();
require './vue/template.php';

?>