<?php

#-Créer une fonction qui teste si un nombre est positif ou négatif (echo dans la page web).
echo "Dans la fonction positive or negative Ruben <br/>";

function positive_or_negative($number){
    if($number < 0){
        echo "votre nombre est négatif <br/>";
    }else if($number > 0){
        echo "votre nombres est positif <br/>";
    }
    else{
        echo "Erreur un mathematicien est en panique <br/>";
    }
}

positive_or_negative(0);
positive_or_negative(-25);
positive_or_negative(25);
positive_or_negative(52);
positive_or_negative(-35);

# On tente de pousser un peu plus avec un retour dans une tableau

$array_of_number = ["positive", "negative"];

echo "Dans la fonction positive or negative en poussant<br/>";

function negative_or_positive($number, $array){
    array_push($array, $number);
}

negative_or_positive(12, $array_of_number);

var_dump($array_of_number);

$times = rand(2,5);

for ($i=0; $i < $times ; $i++) { 
    $nbr = rand(-50, 50);
    posCheck($nbr);
}

echo "Dans la fonction de joël <br/>";

posCheck(34);

function posCheck($a){
    if ($a > 0){
        echo $a;
        echo '<br>';
        echo 'positive';
        echo '<br>';

    }else{
        echo $a;
        echo '<br>';
        echo 'negative';
        echo '<br>';
    }
}

#Switch case
    echo "Dans le switch case <br/>";
function pos_or_neg_swtich($nbr){
    switch($nbr){
        case $nbr < 0:
            echo "c'est une nombre négatif <br/>";
            break;
        case $nbr > 0:
            echo "c'est un nombre positif <br/>";
            break;
        default:
        echo "Erreur un mathematicien est en panique <br/>";

    }
    pos_or_neg_swtich(-20);
    pos_or_neg_swtich(0);
    pos_or_neg_swtich(20);
}
?>