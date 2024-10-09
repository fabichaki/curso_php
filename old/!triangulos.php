<?php

/*
- Trianugulos a considerar: equilatero, isoceles ou escaleno.

* equilatero = os três lados possuem o mesmo resultado;
* isoceles = duas medidas do triangulo são iguais;
* escaleno = triangulo que seus lados são totalmente diferentes um dos outros;

$lado1 = 0; $lado2 = 0; $lado3 = 0; (triangulo equilatero);

$lado1 = 0; $lado2 = 0; $lado3 = 0; (triangulo isoceles);

$lado1 = 0; $lado2 = 0; $lado3 = 0; (triangulo escaleno);
*/

$lado1 = 1;
$lado2 = 1;  // agora só determinar o número, e sucesso!
$lado3 = 1;

if($lado1 == $lado2 && $lado1 == $lado3 && $lado2 == $lado3){
    echo "Quando os três lados possuem o mesmo tamanho é considerado um triângulo equilátero";
}
if($lado1 == $lado2 && $lado1 != $lado3 && $lado2 != $lado3){
    echo "Quando dois lados são iguais temos um triângulo isoceles";
}
if($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3){
    echo "Tendo três lados, e todos serem indeferente, temos um triângulo escaleno";
}