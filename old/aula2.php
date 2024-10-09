<?php

$nome = "Ludi Milla"; 
$idade = 91;
$cidade = "Bento Gonçalves";
echo "Boa noite! Seja bem-vindo $nome à sua cidade, $cidade!";

echo "<br>";

if ($idade > 18){
    echo "O $nome é maior de idade.";
}

echo "<br>";
echo "<br>";

// para maior de idade 

$nome2 = "Roberto";
$idade2 = 11;

if ($idade2 < 18){
    echo "O $nome2 é menor de idade";
}
echo "<br>";

if ($idade2 < 18){
    echo "$nome2, não pode dirigir";
}

echo "<br>";
echo "<br>";
echo "Hiper calculadora, avançada para a NASA 1.1";
echo "<br>";

$valorA = 1;
$valorB = 2;
$operacao = "acrescentar"; // pode ser alterado conforme o desejo (soma, subtrair, multiplicar, divisao). 
$resultado="";

if ($operacao == "soma" || $operacao == "adicao" || $operacao == "mais" || $operacao == "acrescentar"){
    $resultado = $valorA + $valorB;
}elseif($operacao == "subtrair" || $operacao == "diminuir" || $operacao == "tirar"){
    $resultado = $valorA - $valorB;
}elseif($operacao == "multiplicar"){
    $resultado = $valorA * $valorB;
}elseif($operacao == "divisao" || $operacao == "dividir"){
    $resultado = $valorA / $valorB;
}else{
    echo "aceito somente os seguintes caracteres<br>
    soma<br>
    subrair<br>
    multriplicar<br>
    divisao<br>";
}
if($resultado != ""){
    echo "A operação selecionada foi $operacao com os valores $valorA e $valorB e o resultado foi $resultado.";
}

// como utilizar dos demais sinais de calculos, sem interfeirir em todas, mas com poucas modificações. Como "||" significa "ou".

echo "<br>";
echo "<br>";

// teste para saber se tem como a pessoa fazer a CNH
// precisa-se ter 18 e dinheiro em mãos

echo "teste número 1:";
echo "<br>";

$idademin = 18;
$dinheiro = 1000;

if($idademin >= 18 && $dinheiro >= 1000){ // com valores necessários (X ">=" Y)
    echo "Parabéns! Você pode fazer a sua primeira carteira nacional de habilitação (CNH).";
}

echo "<br>";

if($idademin <= 18 && $dinheiro <= 1000){ // sem a idade e dinheiro necessário (X "<=" Y)
    echo "Que insatisfação! Inferelizmente você não possui nenhum dos requisitos ($idademin anos e R$ $dinheiro reais).";
}

echo "<br>";

if($idademin <= 18 && $dinheiro <= 1000){
    echo "Infelizmente somente um dos requisitos foi atendido ($idademin anos e $dinheiro reais).";
}

echo "<br>";

if($idademin >= 18 && $dinheiro >= 1000){
    echo "Mesmo com a idade mínima necessária, você não atendeu ao valor requisitadada ($idademin anos e $dinheiro reais).";
}

echo "<br>";

if($idademin <= 18 && $dinheiro <= 1000){
    echo "Você não atribuiu a nenhum dos nossos requisitos ($idademin anos e $dinheiro reais).";
}

// da mesma forma, lógicamente, devemos usar o símbolo contrário.

echo "<br>";
echo "<br>";

echo "teste número 2:";
echo "<br>";

$idadepessoa = 18;
$dinheironacarteira = 1000;

if($idadepessoa >= 18 && $dinheironacarteira >= 1000){
    echo "Parabéns! Você pode fazer sua carteira de motorista. <br>";
}
elseif($idadepessoa < 18 && $dinheironacarteira >= 1000){
    echo "Você não atende a idade necessária. <br>";
}
elseif($idadepessoa >= 18 && $dinheironacarteira < 1000){
    echo "Você não atende ao valor solicitado. <br>";
} 
if($idadepessoa < 18 && $dinheironacarteira < 1000){
    echo "Você não atende a nenhum de nossos requisitos. <br>";
}

// teste na utilização do "if" e também com o "elseif". podechik!

?>