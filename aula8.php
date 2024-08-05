<?php 

/*
function imprimir(){
    $abc = 10;

    return $abc;
}

$resultado = imprimir();
echo $resultado;
*/

/*
function imprimir($tabuada){
    for($t = 0; $t <= 10; $t++){ echo "<br>";
        for($n = 0; $n <= 10; $n++){
            echo "$t X $n = ". $t*$n ."<br>";
        }
    }
    
  

}

imprimir($tabuada);
*/

function calculadora($valor1, $operação, $valor2){
    $resultado = 0;

    if ($operação == '+'){
        $resultado = $valor1 + $valor2;
    }
    if ($operação == '-'){
        $resultado = $valor1 - $valor2;
    }
    if ($operação == '*'){
        $resultado = $valor1 * $valor2;
    }
    if ($operação == '/'){
        $resultado = $valor1 / $valor2;
    }

return $resultado;

}

$valor1 = 1;
$operação = '+';
$valor2 = 2;

$resultado = calculadora($valor1, $operação, $valor2);

echo "O resultado de; $valor1 $operação $valor2 = $resultado";

// Essa é a "function" para fazer uma calculadora nada complicado, mas exige uma atençãozainha

