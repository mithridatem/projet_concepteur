<?php
    session_destroy();
    unset($_COOKIE['PHPSESSID']);
    header('location: connexion?deco=1');
?>