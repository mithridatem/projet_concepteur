<!DOCTYPE html>
<html>
<head>
    <title>Ajouter article</title>
    <link href="../css/adduser.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="../controller/ctrlAddArticle.php" method="post">
    <p>Titre:</p>
    <input type="text" name="name_art"/>
    <p>Contenu:</p>
    <textarea name="content_art"></textarea>
    <p>Date:</p>
    <input type="date" name="date_art"/>
    <input type="submit" value="Valider" name="submit_util" id="submit"/>
</form>
</body>
</html>