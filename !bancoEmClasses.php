<?php

/* criar uma classe que representa um banco esta calsse deverr ter as operações básicas como:
* saque(-), depósito(+), extrato(=) e transferência(-).
* 
* e suas devidas validações, em cada operação ! */


class Banco{
    
    public $saldoAtual = 0;

    public function saque($valor){
        if($valor > $this->saldoAtual || $valor <= 0) {
            return "não foi possivel concluir a operação do saque!saldo atual é de $this->saldoAtual";
        } 

        $this->saldoAtual -= $valor;
    }

    public function deposito($valor){
        if($valor <= 0 || $valor == ""){
            return "não foi possivel concluir a operação de depósito! sem valor destinado a conta!";
        }
        $this->saldoAtual += $valor;
    }

    public function extrato(){
        $this->saldoAtual;
    }

    public function tranferencia($valor, $destinatario){
        if($valor > $this->saldoAtual || $valor <= 0) {
            return "não foi possivel concluir a operação do saque!saldo atual é de $this->saldoAtual";
        } 
        $this->saldoAtual -= $valor;
    }
    
}

$banco = new Banco();
$banco->saque(100, 50);
echo $banco->saldoAtual;