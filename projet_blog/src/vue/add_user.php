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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="../dist/output.css" rel="stylesheet" />
  </head>

  <body>
<form action="" class="justify-center flex " method="POST">
    <div class="mt-8 w-80">
        <div class="grid grid-cols-1 gap-6">
            <label class="block">
                <span class="text-gray-700">Full name</span>
                <input type="text" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black" placeholder="Your name" name="name_util"/>
            </label>
            <label class="block">
                <span class="text-gray-700">Fore name</span>
                <input type="text" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black" placeholder="Your fore name" name="first_name_util" />
            </label>
            <label class="block">
                <span class="text-gray-700">Password</span>
                <input type="password" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black" placeholder="" name="mail_util"/>
            </label>
            <label class="block">
                <span class="text-gray-700">Email address</span>
                <input type="email" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black" placeholder="john@example.com" name="mdp_util"/>
            </label>
            <input type="submit" value="submit" class="rounded-full bg-blue-800 text-white h-10" name="submit"/>
        </div>
    </div>
</form>
    
</body>
</html>