<?php

/**
 * name_util
 * first_name
 * mail_util
 * mdp_util
 * img_util
 */

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription</title>
    <link href="../dist/output.css" rel="stylesheet" />
</head>

<body class="relative">
    <nav class="bg-blue-800 w-full h-32 flex pl-5 pr-10 shadow-2xl ">
        <div class="w-1/6 ">
            <img src="../dist/img/Logo.png" alt="" class="object-contain h-72 justify-start">

        </div>
        <ul class="flex justify-center  text-white text-2xl h-full items-end w-4/6 pb-5 ">
            <a href="#" class="hover:text-blue-300">
                <li class="pr-10">Accueil</li>
            </a>
            <a href="#" class="hover:text-blue-300">
                <li>Article</li>
            </a>
            <a href="#" class="hover:text-blue-300">
                <li class="pl-10">Projet</li>
            </a>
        </ul>
        <ul class="flex justify-end text-white text-2xl h-full items-center w-1/6 ">
            <a href="#" class="hover:text-blue-300 modal-button-js">
                <li>Connexion</li>
            </a>
        </ul>
    </nav>
    <h1 class="text-center text-2xl text-gray-700 mt-20">Créer ton <span class="before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-blue-800 relative inline-block "><span class="relative text-white">Compte</span> </span></h1>
    <form action="" class="justify-center flex  " method="POST" enctype="multipart/form-data">
        <div class="mt-8 xl:w-3/5 flex md:w-5/5">
            <div class="grid grid-cols-1 gap-6 xl:w-2/4 sm:w-4/4">
                <label class="block">
                    <span class="text-gray-700">Prénom</span>
                    <input type="text" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="Votre prénom" name="name_util" />
                </label>
                <label class="block">
                    <span class="text-gray-700">Nom</span>
                    <input type="text" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="Votre nom" name="first_name_util" />
                </label>
                <label class="block">
                    <span class="text-gray-700">Mot de passe</span>
                    <input type="password" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="AZERTYUIOP c'est pas un mot de passe" name="mdp_util" />
                </label>
                <label class="block">
                    <span class="text-gray-700">Image de profil</span>
                    <input type="file" class="form-control block w-6/6 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="img_util" />
                </label>
                <label class="block">
                    <span class="text-gray-700">Adresse mail</span>
                    <input type="email" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="john@example.com" name="mail_util" />
                </label>
                <input type="submit" value="Valider" class="rounded-full bg-blue-800 text-white h-10 xl:w-1/3 w-2/3 mx-auto mb-10" name="submit" />
            </div>
            <div class="w-2/4 xl:block hidden">
                <img src="../dist/img/product-launch-in-business-startup.svg" alt="">
            </div>
        </div>
    </form>
    <section class="w-full h-screen absolute top-0 flex justify-center items-center modal-connexion-js hidden ">
        <article class="w-2/4 bg-white flex justify-center h-60 items-center">
            <section class="w-2/4 text-center">
                <p>
                    J'ai déjà un compte, je souhaite me connecter
                </p>
                <form action="" class="justify-center items-center flex flex-col ml-10  " method="POST" enctype="multipart/form-data">

                    <label class="block w-64">
                        <input type="text" class="mt-5 block w-full px-0.5 border-1 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="Your name" name="name_util" />
                    </label>
                    <label class="block w-64">
                        <input type="password" placeholder="votre mot de passe" class="mt-5 block w-full px-0.5 border-1 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="" name="mdp_util" />
                    </label>
                    
                <input type="submit" value="submit" class="rounded-full bg-blue-800 text-white h-10 w-1/3 mx-auto mt-5" name="submit" />
                </form>
            </section>
            <hr class="rotate-90 w-32">
            <section class="w-2/4 text-center self-auto">
                <p>
                    Je n'ai pas de compte, je souhaite en créée un
                </p>
               <a href="#"><button class="rounded-full bg-blue-800 text-white h-10 w-1/3 mx-auto mt-5">Let's Go</button></a>
            </section>
        </article>
    </section>
    <script src="../vue/js/modal.js"></script>
</body>

</html>