<?php

/* criar por meio de objetos as operaçoões matematicas + - * / */

class Calculadora{

    public $resultado = 0; // os valores dos resultados ( o $this retorna ao [<-"resultado"])

    public function somar($num1, $num2){
        $this->resultado = $num1 + $num2;

    } 


    public function subtrair($num1, $num2){
        $this->resultado = $num1 - $num2;
        
    }


    public function multiplicar($num1, $num2){
        $this->resultado = $num1 * $num2;

    }


    public function dividir($num1, $num2){
        $this->resultado = $num1 / $num2;

    }


}

$operacao = new Calculadora(); // somente mudar a função "somar" || opcional colocar nos demais .
echo $operacao->somar(7, 1); // 8
echo $operacao->resultado;
echo "<br>";

// restante não é necessário, mas é mais para a ilustração de como fazer !!!


echo $operacao->subtrair(10, 5); // 5
echo $operacao->resultado;
echo "<br>";


echo $operacao->multiplicar(2, 3); // 6
echo $operacao->resultado;
echo "<br>";


echo $operacao->dividir(22, 2); // 11
echo $operacao->resultado;
echo "<br>";
