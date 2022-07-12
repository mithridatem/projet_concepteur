<?php
//Protection face aux injections SQL
 
function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data,ENT_QUOTES);
      return $data;
    }

    
    function isNotEmptyConnexion(){
        if(!empty($_POST['email']) || !empty($_POST['password']) || !empty($_POST['confirmPassword'])){
            return true;
        }else{
            return false;
        }
    }

    function passwordEquals(){
        if($_POST['password'] == $_POST['confirmPassword']){
            return true;
        }else{
            return false;
        }
    }

    function emailVerification(){
        return (boolean) filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL);
    }

    function isUserInBdd($pdo,$email){
        $reponse = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $reponse->execute(array($email));
        $data = $reponse->fetch();
        if($data != null){
            return true;
        }else{
            return false;
        }
    }

    function changeStatus($pdo,$email){
        $reponse = $pdo->prepare("UPDATE users SET status = 1 WHERE email = ?");
        $reponse->execute(array($email));
        $data = $reponse->fetch();
        if($data != null){
            return true;
        }else{
            return false;
        }
    }

    function connectUserInSession($pdo,$email){
        $reponse = $pdo->prepare("SELECT * from users WHERE email = ?");
        $reponse->execute(array($email));
        $data = $reponse->fetch();
        if($data != null){
            $_SESSION['session_id'] = $data['id_user'];
            return true;
        }else{
            return false;
        }
    } 

    function saveImage(){
        if(isset($_FILES['image'])){                 
            $img_name = $_FILES['image']['name']; //On récupère le nom de l'image
            $img_type = $_FILES['image']['type']; //On récupère le type de l'image
            $tmp_name = $_FILES['image']['tmp_name']; //Ce nom temporaire est utilisé pour sauvegarder/ou modifier l'emplacement de fichier dans notre dossier
                    

            //On récupère l'extension
            $img_explode = explode('.',$img_name);
            $img_ext = end($img_explode); //Ici on récupère l'extension de l'image
            $extension = ['png', 'jpeg', 'jpg','PNG','JPG','JPEG']; //Une liste de toutes les extensions valides
                  
            if(in_array($img_ext,$extension) == true){
                //Si l'extension de l'image de l'utilisateur matche avec nos extensions valide :
                $time = time(); 
                //On récupère le timestamp
                //On a besoin de ça pour remplacer le nom de l'image avec le timestamp
                //comme ça toutes les images ont un nom unique.
                //On met l'image dans notre dossier
                $new_img_name = $time.$img_name;
                move_uploaded_file($tmp_name,"images/".$new_img_name);
                return $new_img_name;      
            }else return false;
        }else  return false;
    }

    function saveUserInBdd($pdo,$email,$password,$name,$firstname,$img){
        $reponse = $pdo->prepare("INSERT INTO users ('email','name','firstname','password','img','statut',id_role) VALUES (?,?,?,?,?,?,?)");

        $reponse->execute(array($email,$name,$firstname,$password,$img,'1','1'));
        $reponse = $pdo->prepare('SELECT * from users WHERE email = ?');
        $reponse->execute(array(trim($email,"'")));                                            
        $data =  $reponse->fetch();
        if(!empty($data)){
            return true;
        }else{
            return false;
        }
    }

    function errorMessage($errorMessage){
        echo 
        "
        <script>
            document.getElementById('error').innerHTML= $errorMessage;
        </script>
        ";
    }
?>