<?php
$times = rand(2,5);

echo $times;

for($i = 0; $i < $times; $i++){
  $nbr = rand(-50,50);
  posCheck($nbr);
}

function posCheck($nbr){
    echo $nbr ;
    echo '<br/>';
    
    if($nbr > 0){
    echo'positive';
    echo'<br/>';
  }else{
    echo'negative';
    echo'<br/>';
  } 
}

?>