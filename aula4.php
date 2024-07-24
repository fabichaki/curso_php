<?php
// tabuada completa de 1 ao 10:
for($t = 0; $t <= 10; $t++){ echo "<br>"; //primeira variavel que calcula de 1 à 10
    for($n = 0; $n <= 10; $n++){
        echo "$t X $n = ". $t*$n ."<br>"; //segunda variavel que calcula tudo de 1 até 10, repetindo 10 vezes, assim por completo
    }
}






$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Utilizando a sintaxe curta
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
?>