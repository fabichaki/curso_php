<?php
$vetorDosParesInv = [];
$vetorDosImparesInv = [];

for($l = 0; $l <= 100; $l++){
    if($l % 2 == 0){ // para os paras usar 0 ou 1 para os impares! 
         $vetorDosParesInv[]=$l; // armazenar a váriavel dos pares.
    } else {
         $vetorDosImparesInv[]=$l; // armazenar a váriavel dos impares.
    }
}






// espaço para testar em casa.







echo "pares ao contrário:<br>";
for($l = 0; $l <= count($vetorDosParesInv); $l++){ //"count" usado para "CONTAR" a quantiedade dos elementos em uma matriz. 
    echo $vetorDosParesInv[$l] . ", ";
}

echo "<br><br>";

echo "impares ao contrário:<br>";
for($l = 0; $l <= count($vetorDosImparesInv); $l++){ // "count" usado para "CONTAR" a quantiedade dos elementos em uma matriz .
    echo $vetorDosImparesInv[$l] . ", ";
}
