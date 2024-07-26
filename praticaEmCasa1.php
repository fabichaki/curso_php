<?php

// hoje, 25/07/2024.

// em primeira ideia, criar uma variavel
$variavel1 = 0; // determinar o valor 0 e tentar recriar a sequência até 10
$variavel2 = 1; // agora uma variavel com valor 1
for($variavel1 = 0; $variavel1 <= 10; $variavel1++){
    echo "$variavel1 X $variavel2 = " . $variavel1*$variavel2; echo "<br>";
};

// prontinho! agora tenho a tabuada do 1, da mesma for com outra.

// segunda ação: tentativa de criar um texto que altere os nomes
// primeiro criaremos as variaveis
echo "<br>";
$nome1 = "Alexandre";
$nome2 = "Andreia";
$nome3 = "Adalberto";
// ideia é criar um texto que seja prático a seleção de nomes.
echo "Olá! Me chamo $nome2! Como posso lhe ajudar?";
// forma prática, só intercalar entre as variaveis agora

// vou tentar criar baseado em valores, se há ou não possibilidade de crédito
// tenho que criar as variaveis se não me falha a memória. usando "if" e "elseif"
echo "<br>"; echo "<br>";
$dinheiromin = 1000;
$dinheiroins >= 999;
if($dinheiroins >= 1000){
    echo "Temos uma nóticia maravilhosa! Você vou avaliado e conquistou a opção crédito em nossa agência!";
}elseif($dinheiroins <= 1000){
    echo "Infelizmente você não tem acesse ao nosso bonús de crédito!";
}
// criada duas variaveis para texte, e sim, deram certas kkkkk
// agora vai da vontade trocar e usa-lás



// um ponto e ideia a zelar, ser mais especifico em comentarios, para não deixar muitos
// textos em volta "economizar linha"


echo "<br>"; echo "<br>";
$horasdesono = 8; // varia conforme seu sono sendo regulado ou não.
if($horasdesono > 8){
    echo "Você esta dormindo demais";
}elseif($horasdesono < 8){
    echo "Você esta dormindo pouco";
}elseif($horasdesono = 8){
    echo "Você esta dormindo o ideal";
}


?>