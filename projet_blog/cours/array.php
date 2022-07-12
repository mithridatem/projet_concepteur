<?php

$hello = "text";

$arr = [12, 52, 13, "test", true, $hello];

#Execution plus lente
$arr2 = array(12, 52, 13, "test", true, $hello);

$assoc_array = ["name" => "Navone", "forename" => "Ruben", "age" => 12];
#Parcourir un tableau

#avec un for
for ($i=0; $i <count($arr) ; $i++) { 
    echo $arr[$i] . "<br/>";
}

#avec un while qui est plus complexe

$count = 0;
echo "dans le while <br/>";
while($count < count($arr2)){
    echo $arr2[$count] . "<br/>";
    $count++;

}

#for each 
echo "dans le for each <br/>";
foreach ($arr as $key => $value) {
    echo $value . "<br/>";

}

#Sur le tableau associatif

for ($i=0; $i < count($assoc_array) ; $i++) { 
    # code...
    echo "valeur actuelle " . $assoc_array[$i];
}

#for each

foreach ($assoc_array as $key => $value) {
    # code...
    echo "valeur actuelle <br/> " . $value . "<br/>";
    echo "clé actuelle  <br/> " . $key . "<br/>";


}