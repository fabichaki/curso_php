<?php

function banco($valor, $operacao, $saldoAtual) {

    $saldo = $saldoAtual;

    if ($operacao == "extrato") {
        return $saldo;
    }

    if ($operacao == "saque") {
        $saldo -= $valor;
    }

    if ($operacao == "deposito") {
        $saldo += $valor;
    }
    
    return $saldo;
}

$saldoAtual = 500;
echo "Valor inicial: $saldoAtual<br>";

$valor = 100;
$operacao = "deposito";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";

$valor = 200;
$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";

$valor = 600;
$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";