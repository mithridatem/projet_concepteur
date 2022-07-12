<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get or poost</title>
</head>
<body>
    <form action="" method="get">
        <label for="name">Name</label>
        <input type="text" name="name" id="">
        <label for="sub_name">Sub name</label>
        <input type="text" name="sub_name" id="">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php
/**
 * isset viendra verifier si la variable est définis
 * empty permet de verifier si une variable est empty, on met donc le ! pour verifier que ce n'est pas vide
 * ! is not 
 */
    if(isset($_GET["submit"]) && !empty($_GET["name"])&& !empty($_GET["sub_name"])){
        echo $_GET['name'] ."<br/>";
        echo $_GET['sub_name'];
    }else{
        echo 'veuillez remplir le formulaire';
    }


    ?>