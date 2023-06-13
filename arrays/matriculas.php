<?php
$alunos2021 = [ 'Ana', 'João', 'Maria', 'Roberto', 'Vinicius'];

$novosAlunos = ['Patricia', 'Nico', 'Kilderson', 'Daiane'];


$alunos2022 = array_merge($alunos2021, $novosAlunos);//une arrays mas não preserva as chaves

var_dump($alunos2022);

$alunos2023 = [...$alunos2021, ...$novosAlunos]; //desempacota os arrays e monta um novo
var_dump($alunos2023);