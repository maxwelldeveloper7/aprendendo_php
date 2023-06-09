<?php
$notas = [
    10, 8, 9, 7, 6
];

rsort($notas);//ordena de forma inversa
var_dump($notas);

$notas = [ 'Ana' => 10, 'João' => 8, 'Maria' => 9, 'Roberto' => 7, 'Vinicius' => 6, ];

asort($notas);//ordem crescente associativa
var_dump($notas);

arsort($notas);//ordem decrescente associativa
var_dump($notas);

ksort($notas);//ordem por chave crescente
var_dump($notas);

krsort($notas);//ordem por chave descrescente
var_dump($notas);