<!DOCTYPE html>
<html>
    <head>
        <title>Ajouter Utilisateur</title>
        <link href="./css/add_user.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form action="../controller/add_article.php" method="post">
            <p>Titre:</p>
            <input type="text" name="name_art" required/>
            <p>Contenu:</p>
            <textarea name="content_art" required></textarea>
            <p>Date:</p>
            <input type="date" name="date_art" required/>
            <input type="submit" value="Valider" name="submit_util" id="submit" />
        </form>
    </body>
</html>