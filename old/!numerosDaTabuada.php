<?php

// Prática em casa: 24/07/2024.

// Vamos tentar criar uma tábuada  sem olhar a "aula4.php"
// primeiro criamos a variavel
echo "tabuada somento do número 1:"; echo"<br>";
$tabuadaDo1 = 1; // podemos usar quaisquer números
for($i = 0; $i <= 10; $i++){
    echo "$tabuadaDo1 X $i = " . $tabuadaDo1*$i; echo "<br>";
}
echo "<br>"; echo "<br>";
// prontinho! depois de uns 10 minutos praticando consegui, tudo certo, porém somente uma tabuada
// caso eu queira fazer dos demais números, é a mesma coisa.



// Agora vamos tentar realizar a mesma coisa, mas utilizando todos os números, todos da tabuada
// do 1 ao 10, porquê é o que temos

// da mesma forma vamos criar uma variavel primária
echo "tabuada completa do 1 ao 10:";
for($PV = 0; $PV <= 10; $PV++){
// agora criaremos a segunda    
    for($SV = 0; $SV <= 10; $SV++){ echo "<br>";
// agora nós aplicamos as duas variaveis em um mesmo comando:    
        echo "$PV X $SV = " . $PV*$SV;
    } echo "<br>";
    echo "----------";
}
// assim temos nossa tabuada completa. SHOW DE BOLA FERA!


?>