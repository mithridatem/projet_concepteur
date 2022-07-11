<?php
include '../utils/utils.php';
include '../view/add_user.php';
include '../utils/validator.php';


function validate_post(){
    if(!isset($_POST['submit_util'])) return false;
    if(!has_all_args(['first_name_util', 'name_util', 'mail_util', 'pwd_util'])) return false;
    if(!email_validator($_POST['mail_util'])) {
        echo"<p class='error'>Email invalide</p>";
        return false;
    }
    if(!password_validator($_POST['pwd_util'])) {
        echo"<p class='error'>Mot de passe invalide! Minimum 8 caractères, une majuscule, une minuscule et un caractère spécial.</p>";
        return false;
    }
    return true
}
if(validate_post()){
    echo_existing(post_element('first_name_util'));
    echo_existing(post_element('name_util'));
    echo_existing(post_element('mail_util'));
    echo_existing(post_element('pwd_util'));
} 
else if(isset($_POST['submit_util'])) echo"<p class='error'>Veuillez compléter le formulaire</p>";
?>