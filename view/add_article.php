<!DOCTYPE html>
<html>
    <head>
        <title>Ajouter Utilisateur</title>
        <link href="./css/add_user.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form action="" method="post">
            <p>Titre:</p>
            <input type="text" name="name_art" required/>
            <p>Sujet:</p>
            <select name="language_art">
                <option value="python">Python</option>
                <option value="js">JavaScript</option>
                <option value="kotlin">Kotlin</option>
            </select>
            <p>Contenu:</p>
            <textarea name="content_art" required></textarea>
            <p>Date:</p>
            <input type="date" name="date_art"/>
            <input type="submit" value="Valider" name="submit_util" id="submit" />
        </form>
    </body>
</html>