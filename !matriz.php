<?php
// matriz de 0 à 100, separado pares dos impares:

$vetorPar = [];
$vetorImpar = [];

echo "MATRIZES:<br><br>";

for($l = 0; $l <= 100; $l++){
    if($l % 2 == 0){ // para os paras usar 0 ou 1 para os impares! 
         $vetorPar[]=$l; // armazenar a váriavel dos pares.
    } else {
         $vetorImpar[]=$l; // armazenar a váriavel dos impares.
    }
}
echo "pares:<br>";
for($l = 0; $l <= count($vetorPar); $l++){ //"count" usado para "CONTAR" a quantiedade dos elementos em uma matriz.
    echo $vetorPar[$l] . ", ";
}

echo "<br><br>";

echo "impares:<br>";
for($l = 0; $l <= count($vetorImpar); $l++){ // "count" usado para "CONTAR" a quantiedade dos elementos em uma matriz .
    echo $vetorImpar[$l] . ", ";
}

echo "<br><br><br><br>";



// matriz de 100 à 0, separado pares dos impares:
$vetorDosParesInv = [];
$vetorDosImparesInv = [];

for($l = 100; $l >= 0; $l--){
    if($l % 2 == 0){ // para os paras usar 0 ou 1 para os impares! 
         $vetorDosParesInv[]=$l; // armazenar a váriavel dos pares.
    } else {
         $vetorDosImparesInv[]=$l; // armazenar a váriavel dos impares.
    }
}
echo "pares ao contrário:<br>";
for($l = 0; $l <= count($vetorDosParesInv); $l++){ //"count" usado para "CONTAR" a quantiedade dos elementos em uma matriz. 
    echo $vetorDosParesInv[$l] . ", ";
}

echo "<br><br>";

echo "impares ao contrário:<br>";
for($l = 0; $l <= count($vetorDosImparesInv); $l++){ // "count" usado para "CONTAR" a quantiedade dos elementos em uma matriz .
    echo $vetorDosImparesInv[$l] . ", ";
}

