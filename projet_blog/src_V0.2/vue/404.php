<?php 
ob_start();
?>
<section class="flex items-center flex-col mt-10 text-center">
    <p class="text-center text-2xl mb-10">la page n'existe pas !</p>
    <object class="w-3/6" data="./dist/img/concept-of-finding-creative-employees-for-company-startup.svg" type="image/svg+xml"></object>
</section>

<?php
    $content = ob_get_clean();
    require './vue/template.php';

    ?>