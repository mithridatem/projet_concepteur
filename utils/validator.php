<?php
function email_validator($email){
    $regex = '/^[^@]+[@][a-zA-Z0-9]+[.][a-zA-Z0-9]+$/';
    return preg_match($regex, $email);
}
function password_validator($pwd){
    $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9]).{8,}$/';
    return preg_match($regex, $pwd);
}
?>