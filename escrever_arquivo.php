<?php

//abre o arquivo em modo de escrita
$arquivo = fopen('./novo_arquivo.txt', 'w');

$texto = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

//escreve no arquivo
fwrite($arquivo, $texto);

fclose($arquivo);