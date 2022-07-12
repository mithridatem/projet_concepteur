<!DOCTYPE html>
<html>
    <head>
        <title>Ajouter Article</title>
        <link href="./css/add_user.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form action="" method="post">
            <p>Utilisateur:</p>
            <select name="id_util">
            <?php
                    include "../utils/bdd.php";
                    include "../model/user.php";
                    
                    $data = getAllUser($bdd);
                    foreach($data as $k){
                        $user = $k->name_util;
                        $id = $k->id_util;
                        echo"<option value='$id'>$user</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Supprimer" name="submit_util" id="submit" />
        </form>
    </body>
</html>