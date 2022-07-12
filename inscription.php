<?php     
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
  
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>
            <form class="d-flex" role="search">
                <a href="connexion.php" class="link-info">Connexion</a>
            </form>
        </div>
    </nav>
    <h1>Inscription</h1>
    <p id="error"></p>
    <form id="form">
        <div class="error"></div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control"  aria-label="Name" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" class="form-control"  aria-label="First Name" name="firstName">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm password</label>
            <input name="confirmPassword" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Select your profile picture</label>
            <input name="image" class="form-control" type="file" id="formFile">
        </div>
        <button onclick="verifyInscription()" type="submit" class="btn btn-primary">Submit</button>
        <a href="connexion.php" class="link-info">J'ai un compte</a>
    </form>
</body>
</html>

<?php 
    function verifyConnexion(){
        include_once "utils/config.php";
        include "utils/methods.php";
        //On récupère les données inscrites par l'utilisateur
        $email = validate(trim( $pdo -> quote($_POST['email']),"'"));
        $password = validate(trim( $pdo -> quote($_POST['password']),"'"));
        $name = validate(trim( $pdo -> quote($_POST['name']),"'"));
        $firstName = validate(trim( $pdo -> quote($_POST['firstName']),"'"));
        $email = trim($email,"'");
        $password = trim($password,"'");
        $name = trim($name,"'");
        $firstName = trim($firstName,"'");


        if(isNotEmptyConnexion()){
            if(passwordEquals()){
                if(emailVerification()){
                    $saveImage = saveImage(); 
                    if($saveImage != null){
                        if(!isUserInBdd($pdo,$email)){
                            if(saveUserInBdd($pdo,$email,$password,$name,$firstName,$saveImage))
                            {    
                                if(connectUserInSession($pdo,$email)){
                                    header('Location: index.php');
                                }else { $message = "Impossible to connect user"; errorMessage($message);}
                            }else { $message = "Impossible to save user"; errorMessage($message);}  
                        }else { $message = "User already exist"; errorMessage($message);}
                    }else { $message = "Image is not valid format"; errorMessage($message);}
                }else { $message = "Email is not valid format"; errorMessage($message);}
            }else { $message = "Password and Password Confirm are not equals"; errorMessage($message);}
        }else { $message = "All fields are required"; errorMessage($message);}
    }

   

?>