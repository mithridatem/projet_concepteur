<!DOCTYPE html>
<?php
    #Base
     $test  = 'toto';

    echo $test;

    $nbr_1 = 12;
    $nbr_2 = 14;

    $total = $nbr_1 + $nbr_2;
    
    echo $total;

    test($nbr1);
    

    function test(int $nbr):int{
        $nbr ="test";
        return $nbr;
    };


?>


<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: black;
        color: white;
    }
    </style>
<body>
    
</body>
</html>