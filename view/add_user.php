<!DOCTYPE html>
<html>
    <head>
        <title>Ajouter Utilisateur</title>
        <link href="./css/add_user.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form action="../controller/add_user.php" method="post">
            <p>Prénom:</p>
            <input type="text" name="first_name_util" />
            <p>Nom:</p>
            <input type="text" name="name_util" />
            <p>Email:</p>
            <input type="email" name="mail_util" />
            <p>Password:</p>
            <input type="password" name="pwd_util" />
            <input type="submit" value="Valider" name="submit_util" id="submit" />
        </form>
        <?php 
        if(isset($_POST['submit_util'])){
            echo $_POST['first_name_util'];
            echo $_POST['name_util'];
            echo $_POST['mail_util'];
            echo $_POST['pwd_util'];
        }
        ?>
    </body>
</html>