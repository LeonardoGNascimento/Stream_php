<?php

$arquivo = fopen('./carros.csv', 'r');

while (!feof($arquivo)) {
    $linhas[] = fgetcsv($arquivo, null, ';');
}

var_dump($linhas);