<?php

//abre o arquivo
$arquivo = fopen('./arquivo.txt', 'r');

//enquanto não chegar no fim do arquivo ele continua a ler
while (!feof($arquivo)) {
    //avança até a proxima quebra de linha, mudando o cursor de linha
    $cursor = fgets($arquivo);
}

fclose($arquivo);
