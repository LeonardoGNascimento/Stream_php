<?php

$teclado = fopen('php://stdin', 'r');

$texto = fgets($teclado);

file_put_contents('./novo_arquivo.txt', $texto, FILE_APPEND);