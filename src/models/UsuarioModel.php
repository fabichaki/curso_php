<?php

// "require" = necessário carregar todas as vezes que for utilizar. & "require_once" = uma vez carregado fica salvo no sistema.

// require_once './src/Conexao.php/';

class UsuarioModels {
    private $fields = [
        'id',
        'cpf',
        'email',
        'senha',
        'excluido',
        'usuario_alteracao',
        'data_criacao',
        'data_atualizacao',
    ];

    public function create(){

    }

    public function read($id){
        
    }

    public function readAll(){
        
    }

    public function update($id){
        
    }

    public function delete($id){
        
    }
}
