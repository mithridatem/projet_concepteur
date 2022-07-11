<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <title>Ajouter article</title>-->
<!--    <link href="../css/adduser.css" rel="stylesheet" type="text/css">-->
<!--</head>-->
<!--<body>-->
<!--<form action="../controller/ctrlAddArticle.php" method="post">-->
<!--    <p>Titre:</p>-->
<!--    <input type="text" name="name_art"/>-->
<!--    <p>Contenu:</p>-->
<!--    <textarea name="content_art"></textarea>-->
<!--    <p>Date:</p>-->
<!--    <input type="date" name="date_art"/>-->
<!--    <input type="submit" value="Valider" name="submit_util" id="submit"/>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->

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
    <p>Titre:</p>
    <p><input type="text" name="name_art"></p>
    <p>Contenu:</p>
    <p><input type="text" name="content_art"></p>
    <p>Date:</p>
    <p><input type="date" name="date_art"></p>
    <label for="categoryselect">Catégorie:</label>

    <select name="category" id="categoryselect">
        <option value="news">News</option>
        <option value="info">Info</option>
        <option value="event">Evènement</option>
    </select>
    <p><input type="submit" value="Envoyer" name="bt"></p>
</form>
</body>
</html>