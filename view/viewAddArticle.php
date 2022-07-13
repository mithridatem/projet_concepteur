<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
</head>
<body>
    
    <h3>Ajouter un article :</h3>
    <form action="" method="post">
        <p><input type="text" name="name_art"></p>
        <p><input type="text" name="content_art"></p>
        <p><input type="date" name="date_art"></p>
        <select name="id_type">
    <?php    //création de la liste déroulante
        $type = new ManagerType();
        $liste = $type->getAlltype($bdd);
        //var_dump($liste);
        foreach($liste as $value){
            echo '<option value="'.$value->id_type.'">'.$value->name_type.'</option>';
        }
    ?>
    </select>
    <p><input type="submit" value="Envoyer" name="bt"></p>
    </form>
    </body>
    </html>