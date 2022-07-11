<?php
function post_element($name, $default=""){
    if(isset($_POST[$name])) return $_POST[$name];
    return $default;
}
function get_element($name, $default=""){
    if(isset($_GET[$name])) return $_GET[$name];
    return $default;
}
function get_from($name, $list, $default=""){
    if(isset($list[$name])) return $list[$name];
    return $default;
}
function echo_existing($var){
    if(!empty($var))echo $var;
}
?>