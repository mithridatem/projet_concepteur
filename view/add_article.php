<!DOCTYPE html>
<html>
    <head>
        <title>Ajouter Article</title>
        <link href="./css/add_user.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form action="" method="post">
            <p>Titre:</p>
            <input type="text" name="name_art" required/>
            <p>Sujet:</p>
            <select name="id_type">
            <?php
                    include "../utils/bdd.php";
                    include "../model/type.php";
                    
                    $data = getAllType($bdd);
                    foreach($data as $k){
                        $type = $k['name_type'];
                        $id = $k['id_type'];
                        echo"<option value='$id'>$type</option>";
                    }
                ?>
            </select>
            <p>Contenu:</p>
            <textarea name="content_art" required></textarea>
            <p>Date:</p>
            <input type="date" name="date_art"/>
            <input type="submit" value="Valider" name="submit_util" id="submit" />
        </form>
    </body>
</html>

