<?php

$nome = "Imanuele";
$sobrenome = "Souza";

echo "Olá ".$nome." ".$sobrenome."!";
echo "<br>";

echo strlen($nome);
echo "<br>";

echo strlen($sobrenome);
echo "<br>";

echo strlen($nome."".$sobrenome);
echo "<br>";
// caso for colocado um espaço entre aspas, contará um numeral a mais!

echo "Por exmeplo:"; echo strlen($nome." ".$sobrenome);
echo "<br>";
// utilizando dois "echo" na mesma linha

echo strtoupper($nome);
echo "<br>";

echo strtolower("TEXTO EM CAIXA ALTA!");
echo "<br>";

echo strrev("gabriel fabichaki");
echo "<br>";
// tricks para texte, caso for legal utilizar

echo "Tudo sobre a data atual ";
echo date("d/m/Y"); // irá atualizar a cada F5 clicado
echo "<br>";

echo "Hora atual ";
echo date("H:i:s"); // irá atualizar a cada F5 clicado
echo "<br>";

echo date("d/m/Y H:i:s A"); // o "A" indicará "AM" ou "PM". atualizará da mesma forma que as de cima.
echo "<br>";

echo "<br>";


$diadasemana = date("w");
if($diadasemana == 0){
    echo "Hoje é domingo.";
}
elseif($diadasemana == 1){
    echo "Hoje é segunda-feira";
}
elseif($diadasemana == 2){
    echo "Hoje é terça-feira";
}
elseif($diadasemana == 3){
    echo "Hoje é quarta-feira";
}
elseif($diadasemana == 4){
    echo "Hoje é quinta-feira";
}
elseif($diadasemana == 5){
    echo "Hoje é sexta-feira";
}
elseif($diadasemana == 6){
    echo "Hoje é sábado";
}

// Compreendido como se utilizar uma váriavel para determinar um código já existente. código existente é o "date("w"),
// determinando este código com uma váriavel diferente por "$diadasemana", fazemos as váriaveis seguintes:
// 
// if($diadasemana == 0){       (0 = domingo)
//  echo "Hoje é domingo"
//}                                                                 (começou com "IF" finaliza em "ELSEIF")
// elseif($diadasemana == 1){
//  echo "Hoje é segunda-feira"  (1 = segunda-feira)
//}
// E assim por diante até 6 (sábado).
?>