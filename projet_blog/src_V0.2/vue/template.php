<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inscription</title>
    <link href="./dist/output.css" rel="stylesheet" />
</head>

<body>
    <nav class="bg-blue-800 w-full justify-center lg:h-32 lg:flex pl-5 lg:relative pr-10 lg:shadow-2xl h-10 absolute top-0 z-20 overflow-hidden ease-in duration-300">

        <div class="lg:w-1/6 w-6/6 h-auto lg:block mx-auto flex relative">
            <img src="./dist/img/Logo.png" alt="" class="mx-auto w-64">
            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="right-0 h-6 w-6 cursor-pointer lg:hidden block mt-2 burger-nav-js absolute" fill="none" viewBox="0 0 24 24" stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </div>

        <ul class="lg:flex justify-center text-white text-2xl lg:h-full items-end w-4/6 pb-5 hidden ">
            <a href="./" class="hover:text-blue-300">
                <li class="pr-10">Accueil</li>
            </a>
            <a href="./articles" class="hover:text-blue-300">
                <li>Article</li>
            </a>
            <a href="#" class="hover:text-blue-300">
                <li class="pl-10">Projet</li>
            </a>
            <?php 
                if(isset($_SESSION['connected'])){?>
                       <a href="./addArticle" class="hover:text-blue-300">
                <li class="pl-10">Ajouter un article</li>
            </a>
            <?php } ?>
        </ul>

        <ul class="lg:flex justify-end text-white text-2xl lg:h-full items-center w-1/6 hidden ">
        <?php 
                if(isset($_SESSION['connected'])){?>
                
            <a href="./deconnexion" class="hover:text-blue-300 ">
                <li>Deconnecter</li>
            </a>
                <?php }else{ ?>
                
            <a href="#" class="hover:text-blue-300 modal-button-js">
                <li>Connexion</li>
            </a>
            <?php } ?>
        </ul>

        <ul class=" justify-center text-center text-white text-2xl items-end w-6/6 pb-5 lg:hidden ">
            <a href="./" class="hover:text-blue-300">
                <li class="">Accueil</li>
            </a>
            <a href="./articles" class="hover:text-blue-300">
                <li>Article</li>
            </a>
            <a href="#" class="hover:text-blue-300">
                <li class="">Projet</li>
            </a>
            <?php 
                if(isset($_SESSION['connected'])){?>
                       <a href="./addArticle" class="hover:text-blue-300">
                <li class="pl-10">Ajouter un article</li>
            </a>
            <?php } ?>
            <?php 
                if(isset($_SESSION['connected'])){?>
                
            <a href="./deconnexion" class="hover:text-blue-300 modal-button-js  ">
                <li>Deconnecter</li>
            </a>
                <?php }else{ ?>
                
            <a href="./connexion" class="hover:text-blue-300 modal-button-js">
                <li>Connexion</li>
            </a>
            <?php } ?>
        </ul>
    </nav>

    <h1 class="text-center text-2xl text-gray-700 mt-20"><?= $content_title?> <span class=" z-10 before:block before:absolute before:-inset-1 before:-skew-y-3 before:bg-blue-800 relative inline-block "><span class="relative text-white"><?=$title?></span> </span></h1>

    <?= $content ?>


    <section class="w-full h-screen absolute top-0 flex justify-center items-center modal-connexion-js hidden ">
        <article class="w-2/4 bg-white flex justify-center h-60 items-center z-20">
            <section class="w-2/4 text-center">
                <p>
                    J'ai déjà un compte, je souhaite me connecter
                </p>
                <form action="./connexion" class="justify-center items-center flex flex-col ml-10  " method="POST" enctype="multipart/form-data">

                    <label class="block w-64">
                        <input type="mail" class="mt-5 block w-full px-0.5 border-1 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="Your name" name="mail_util" />
                    </label>
                    <label class="block w-64">
                        <input type="password" placeholder="votre mot de passe" class="mt-5 block w-full px-0.5 border-1 border-b-2 border-gray-200 focus:ring-0 focus:border-blue-800" placeholder="" name="mdp_util" />
                    </label>

                    <input type="submit" value="submit" class="rounded-full bg-blue-800 text-white h-10 w-1/3 mx-auto mt-5" name="submit" />
                </form>
            </section>

            <hr class="rotate-90 w-32">

            <section class="w-2/4 text-center place-self-stretch">
                <p>
                    Je n'ai pas de compte, je souhaite en créée un
                </p>
                <a href="./addUser"><button class="rounded-full bg-blue-800 text-white h-10 w-1/3 mx-auto mt-5">Let's Go</button></a>
            </section>

        </article>
    </section>
    
    <script src="./vue/js/modal.js"></script>
</body>

</html>