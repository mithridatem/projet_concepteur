<?php
class Utils_controller{
    
    static function check_image($posted_img) {
        if (!empty($_FILES[$posted_img]['name'])) {
            foreach ($_FILES[$posted_img] as $key => $value) {
                echo $key . " : " . $value . "<br/>";
            }
            $temp_name = $_FILES[$posted_img]["tmp_name"];
            $name = $_FILES[$posted_img]["name"];
            $size = $_FILES[$posted_img]["size"];
            $error = $_FILES[$posted_img]["error"];
            $path = "$name";
            move_uploaded_file($temp_name,  "./dist/img/$path");
            return $path;
        }else{
            return "";
        }
    }

}