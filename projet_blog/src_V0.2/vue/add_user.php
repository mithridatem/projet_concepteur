  

    <form action="" class="justify-center flex z-2O " method="POST" enctype="multipart/form-data">

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
                <img src="./dist/img/product-launch-in-business-startup.svg" alt="">
            </div>
        </div>

    </form>

