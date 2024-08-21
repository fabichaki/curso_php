<?php

/* utilizando o "empty()"*/

$saldoAtual = 1000;

function banco($valor, $operacao, $saldoAtual){
    
    if($operacao == "saque" && empty($valor)){
        return "não foi possivel concluir a operação do saque!saldo atual é de $saldoAtual";
    } elseif ($operacao == "saque"){
        $saldoAtual = $saldoAtual - $valor;
    }

    if($operacao == "deposito" && empty($valor)){
        return "não foi possivel concluir a operação de depósito! sem valor destinado a conta!";
    } elseif ($operacao == "deposito"){
        $saldoAtual = $saldoAtual + $valor;
    }
    if($operacao == "extrato"){
        return $saldoAtual;
    }
    
    return $saldoAtual;
}

$valor = 100; /* caso ele fique zerado, calculará o resultado normalmente, mas quando negativar a conta irá apresetará a mensagem.*/
$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";

$valor = 200; /* caso ele fique zerado, calculará o resultado normalmente, mas quando negativar a conta irá apresetará a mensagem.*/
$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";

$valor = 600; /* caso ele fique zerado, calculará o resultado normalmente, mas quando negativar a conta irá apresetará a mensagem.*/
$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";

echo "<br>";

$operacao = "extrato";
echo "$opercao Extrato $saldoAtual";