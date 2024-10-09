<?php

$i = 0;

while($i <= 10){ 
    echo "$numero x $i= " . $numero * $i . "<br>";
    $i++;            
}



echo "numeros pares com for <br>";

$numero = 20; // moch || chumbado || no braço  

for ($s  = 2 ; $s <= $numero; $s = $s+2){
    echo $s. "<br>"; 
    
}



echo "soma de numeros  <br>";
$soma = 0; // moch || chumbado || no braço
$l = 1;

while($l <= 100){ 
    $soma += $l;
   
    $l++;            
}
?>