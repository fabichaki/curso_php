<?php

$vetorLetras = ['A','K','C','D','E','T','V','B'];
$n = count($vetorLetras);

for ($i = 0; $i < $n - 1; $i++) { // $i = 7
    for ($j = 0; $j < $n - $i - 1; $j++) { // $j = 1
        if ($vetorLetras[$j] > $vetorLetras[$j + 1]) {
            
            $vetor = $vetorLetras[$j];
            $vetorLetras[$j] = $vetorLetras[$j + 1];
            $vetorLetras[$j + 1] = $vetor;
        }
    }
}
echo implode(',', $vetorLetras); // implode