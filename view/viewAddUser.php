<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--    <title>Ajouter Utilisateur</title>-->
<!--    <link href="../css/add_user.css" rel="stylesheet" type="text/css">-->
<!--</head>-->
<!--<body>-->
<!--<form action="../controller/ctrlAdduser.php" method="post">-->
<!--    <p>Prénom:</p>-->
<!--    <input type="text" name="first_name_util" />-->
<!--    <p>Nom:</p>-->
<!--    <input type="text" name="name_util" />-->
<!--    <p>Email:</p>-->
<!--    <input type="email" name="mail_util" />-->
<!--    <p>Password:</p>-->
<!--    <input type="password" name="pwd_util" />-->
<!--    <input type="submit" value="Valider" name="submit_util" id="submit" />-->
<!--</form>-->
<!--</body>-->
<!--</html>-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
</head>
<body>
<form action="../controller/ctrlAddUser.php" method="post" enctype="multipart/form-data">
    <p>Name:</p>
    <p><input type="text" name="name_util"></p>
    <p>First Name:</p>
    <p><input type="text" name="first_name_util"></p>
    <p>Mail:</p>
    <p><input type="text" name="mail_util"></p>
    <p>Password:</p>
    <p><input type="password" name="mdp_util"></p>
    <p><input type="file" name="img_util"></p>
    <p><input type="submit" value="Envoyer" name="bt"></p>
</form>
</body>
</html>