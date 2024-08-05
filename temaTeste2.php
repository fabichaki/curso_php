<?php

for($i = 100; $i >= 0; $i--){
    echo $i . ", ";
}

for($i % 2 == 0; $i >= count($vpar); $i--){
    $vpar[] = $i;
}
for($i % 2 == 1; $i >= count($vimpar); $i--){
    $vimpar[] = $i;
}

echo "numeros pares:"; echo $vpar[$i] . "<br>";
echo "numeros impares:"; echo $vimpar[$i] . "<br>";