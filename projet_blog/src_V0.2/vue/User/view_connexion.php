<?php
ob_start();
?>

<body>
    <article class="w-4/4 bg-white flex justify-center h-60 items-center z-20 mt-20">
        <section class="w-4/4 text-center">
            <p>
                Connexion
            </p>
            <form action="" class="justify-center items-center flex flex-col " method="POST">
                <label class="block w-64">
                    <input type="mail" class="mt-5 block w-full px-0.5 border-1 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="Votre mail" name="mail_util" />
                </label>
                <label class="block w-64">
                    <input type="password" placeholder="votre mot de passe" class="mt-5 block w-full px-0.5 border-1 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="" name="mdp_util" />
                </label>

                <input type="submit" value="submit" class="rounded-full bg-blue-800 text-white w-32 h-10  mt-5" name="submit" />
                <?php $error ?>
            </form>
            <?= $error ?>
        </section>
    </article>
</body>

</html>

<?php

$content = ob_get_clean();
require './vue/template.php';
?>