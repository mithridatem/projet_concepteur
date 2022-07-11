<?php
include '../utils/utils.php';


if(isset($_POST['submit_util'])){
    echo_existing(post_element('first_name_util'));
    echo_existing(post_element('name_util'));
    echo_existing(post_element('mail_util'));
    echo_existing(post_element('pwd_util'));
} 
?>