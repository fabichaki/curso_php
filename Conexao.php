<?php

$conexao = mysqli_connect("localhost", "aluno", "1234", "curso_24");

//  só entrar aqui se deu erro ao conectar com o banco.

if(!$concexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}
