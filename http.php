<?php

$contexto = stream_context_create([
    "http" => [
        "method" => "PATCH",
        "header" => "X-From: Leo\r\nContent-Type: text/plain",
        "content" => "teste"
    ]
]);

echo file_get_contents('http://httpbin.org/patch', false, $contexto);