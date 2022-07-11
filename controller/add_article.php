<?php 
include '../utils/utils.php';


if(isset($_POST['submit_util'])){
    echo_existing(post_element('name_art'));
    echo_existing(post_element('content_art'));
    echo_existing(post_element('date_art'));
    echo_existing(post_element('erreur'));
} 
?>