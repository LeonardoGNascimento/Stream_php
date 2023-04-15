<?php

$meusCarros = file('./arquivo.txt');

$arquivoCsv = fopen('./carros.csv', 'w');

foreach($meusCarros as $carro) {
    $linha = [trim($carro), '2023'];

    fputcsv($arquivoCsv, $linha, ';');
    // fwrite($arquivoCsv, implode(',', $linha));
}