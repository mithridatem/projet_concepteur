<?php
include '../utils/utils.php';
include '../view/add_user.php';


if(isset($_POST['submit_util']) && has_all_args(['first_name_util', 'name_util', 'mail_util', 'pwd_util'], $_POST)){
    echo_existing(post_element('first_name_util'));
    echo_existing(post_element('name_util'));
    echo_existing(post_element('mail_util'));
    echo_existing(post_element('pwd_util'));
} 
else if(isset($_POST['submit_util'])) echo"<p class='error'>Veuillez compléter le formulaire</p>";
?>