<?php
$title = "site web";
$content_title = "Bienvenu sur mon";
if(!isset($_SESSION["connected"])){
    $_SESSION["role"] = 0;

}
require './vue/view_home.php';

