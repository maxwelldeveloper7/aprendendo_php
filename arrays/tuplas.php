<?php

$dados = ['Vinicius', 10, 24];
list($nome, $nota, $idade) = $dados;// mesma coisa que [$nome, $nota, $idade] = $dados


extract($dados);
var_dump($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));