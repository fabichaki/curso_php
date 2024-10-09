<?php

class Banco{
    
    public $saldoAtual = 500;

    public function saque($valor){
        if ($valor >= 0){
            return "valor sacado maior que o valor dsponivel em conta para saque verefique o valor a ser sacado:";
        
        }elseif($valor <= 0 || $valor == ""){
            return 'valor invalido informe valor para saque ';
          }
        
          $this->saldoAtual -=  $valor;

    }    
    
    public function deposito($valor){
        if ($valor <= 0){
            return "infelizmente não reconhecemos nenhum valor para ser depositado";
        }
        $this->saldoAtual += $valor;
    }
    
    public function extrato($valor, $saldoAtual){

        $this->saldoAtual = $saldoAtual;
    }  
    
    public function transferencia($valor, $destinatario){ 
        if ($valor >= 0 || $valor == ""){
            return "não reconhecemos nenhum valor para sua traferência.";
        } elseif ($valor < 0){
            return "parabéns sua tranferência para ... foi concluída";
        }
        $this->saldoAtual -= $valor;
    }    

}


$banco = new Banco();
$banco->saque(50);
$banco->deposito(50);
echo $banco->extrato();