<?php

$arquivoCarros = new SplFileObject('./carros.csv');

while(!$arquivoCarros->eof()) {
    $linha = $arquivoCarros->fgetcsv(';');
}

echo $arquivoCarros->getType();

// var_dump($arquivoCarros);