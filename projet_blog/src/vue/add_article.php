<?php

/**
 * name_art
 * content_art
 * date_art
 */
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="../dist/output.css" rel="stylesheet" />
</head>

<body>
    <!-- * name_art
 * content_art
 * date_art -->
    <form action="../controller/ctrl_add_article.php" class="justify-center flex " method="POST">
        <div class="mt-8 w-2/5">
            <div class="grid grid-cols-1 gap-6">
                <label class="block">
                    <span class="text-gray-700">Article name</span>
                    <input type="text" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black" placeholder="Your name" name="name_art" />
                </label>
      

                <span class="text-gray-700">Dans quel catégorie</span>
                <select class="
                    block
                    w-full
                    mt-0
                    px-0.5
                    border-0 border-b-2 border-gray-200
                    focus:ring-0 focus:border-black
                  " name="type">
                    <option>HTML/CSS</option>
                    <option>PHP</option>
                    <option>JavaScript</option>
                    <option>Other</option>
                </select>

                <span class="text-gray-700">Une date</span>
                <input type="date" class="mt-1 block w-full" name="date_art">
              
                <span class="text-gray-700">Votre article</span>
                <textarea class="
                    mt-0
                    block
                    w-full
                    px-0.5
                    border-0 border-b-2 border-gray-200
                    focus:ring-0 focus:border-black
                  " rows="2" name="content_art">
                
                </textarea>

           
                <input type="submit" value="submit" class="rounded-full bg-blue-800 text-white h-10" name="submit"/>
            </div>
        </div>
    </form>
</body>

</html>