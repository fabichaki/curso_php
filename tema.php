<?php


$vetorDosParesInv = [];
$vetorDosImparesInv = [];

for($l = 100; $l >= 0; $l--){
    if($l % 2 == 0){
         $vetorDosParesInv[]=$l;
    } else {
         $vetorDosImparesInv[]=$l;
    }
}
echo "pares ao contrário:<br>";
for($l = 0; $l <= count($vetorDosParesInv); $l++){
    echo $vetorDosParesInv[$l] . ", ";
}

echo "<br><br>";

echo "impares ao contrário:<br>";
for($l = 0; $l <= count($vetorDosImparesInv); $l++){
    echo $vetorDosImparesInv[$l] . ", ";
}

