<?php

function banco($valor, $operacao, $saldoAtual) {

    $saldo = $saldoAtual;

    if ($operacao == "extrato") {
        return $saldo;
    }
    
    return $saldo;
}

$saldoAtual = 50;
$valor = 100;
$operacao = "deposito";

$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "Extrato: $valor $operacao = $saldoAtual<br>";

$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "Extrato: $valor $operacao = $saldoAtual<br>";

// só copiei não consegui entender muito bem. avaliar outro dia!!!