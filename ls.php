<?php

$diretorioAtual = dir('.');

var_dump($diretorioAtual->read());

// while($arquivo = $diretorioAtual->read()) {
//     var_dump($arquivo);
// }