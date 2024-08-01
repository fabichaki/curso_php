<?php

for($i = 0; $i <= 100; $i++){
    if($i % 2 == 0){
        $vetorPar[] = $i;
    } else {
        $vetorImpar[] = $i;
    }
}


for($i = 0; $i <= count($vetorPar); $i++){
    echo $vetorPar[$i] . ", ";
}

echo "<br><br>";

for($i = 1; $i <= count($vetorImpar); $i++){
    echo $vetorImpar[$i] . ", ";
}