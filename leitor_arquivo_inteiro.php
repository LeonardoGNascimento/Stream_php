<?php
//abre o arquivo em modo read(leiturea)
$arquivo = fopen('./arquivo.txt', 'r');

//pega o total de bytes do arquivo
$tamanhoDoArquivo = filesize('./arquivo.txt');

//le o arquivo pelos byte
$arquivoInteiro = fread($arquivo, $tamanhoDoArquivo);

echo $arquivoInteiro;

//fecha o arquivo
fclose($arquivo);
