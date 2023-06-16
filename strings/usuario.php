<?php

$email = 'vinívius@alura.com.br';
$senha = 'ãççççç';

echo strlen($senha) . PHP_EOL;

if(strlen($senha) < 8){
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;