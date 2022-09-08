<?php
ob_start();
?>
<form action="" class="justify-center flex" method="POST">
    <div class="mt-8 mr-10 ml-10 w-full lg:w-2/5">
        <div class="grid grid-cols-1 gap-6">

            <label for="name-article" class="block">
                <span class="text-gray-700">Article name</span>
                <input type="text" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black" placeholder="Nom de l'article" name="name-article" />
            </label>

            <label for="id-type" class="block">
                <span class="text-gray-700">Dans quel catégorie</span>
                <select class="block w-full mt-0 px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black" name="id-type">
                    <?php foreach ($allTypes as $value) { ?>
                        <option value="<?= $value->id_type ?>" /> <?= $value->name_type ?> </option>
                    <?php } ?>
                </select>
            </label>

            <label for="date-article" class="block">
                <span class="text-gray-700">Une date</span>
                <input type="date" class="mt-1 block w-full" name="date-article">
            </label>


            <label for="img-article" class="block">
                <span class="text-gray-700">Image pour l'article</span>
                <input type="file" class="form-control block w-6/6 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="img-article" />
            </label>

            <label for="content-art" class="block">
                <span class="text-gray-700">Votre article</span>
                <textarea class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black" rows="2" name="content-article">
                </textarea>
            </label>



            <input type="submit" value="submit" class="rounded-full bg-blue-800 text-white h-10" name="submit" />
        </div>
    </div>
</form>

<?php if ($error === "ok") { ?>
    <p class="text-center text-green-600"> L'article est envoyer </p>
<?php } else if ($error === "error") { ?>
    '<p class="text-center text-red-600"> Désoler une erreur est survenue il manque le titre ou le contenus </p>';
<?php }else{

}
$content = ob_get_clean();
require './vue/template.php';
?>