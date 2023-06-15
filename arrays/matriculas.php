<?php
$alunos2021 = [ 'Ana', 'João', 'Maria', 'Roberto', 'Vinicius'];

$novosAlunos = ['Patricia', 'Nico', 'Kilderson', 'Daiane'];


$alunos2022 = array_merge($alunos2021, $novosAlunos);//une arrays mas não preserva as chaves

var_dump($alunos2022);

$alunos2022 = [...$alunos2021, ...$novosAlunos]; //desempacota os arrays e monta um novo

array_push($alunos2022, 'Alice', 'Bob', 'Charlie');//formas de adicionar arrays
$alunos2022[] = 'Luiz';

array_unshift($alunos2022, 'Stephane', 'Rafaela');//adiciona no inicio do array

echo array_shift($alunos2022) . PHP_EOL;; //remove o primeiro elemento e reordena os indices com chaves numéricas, chaves com strings não sofrem alterações

var_dump(array_pop($alunos2022) . PHP_EOL);// remove o ultimo array

var_dump($alunos2022);