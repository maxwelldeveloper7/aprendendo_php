<?php

$notasBimestre1 = [ 'Ana' => 10, 'João' => 8, 'Maria' => 9, 'Roberto' => 7, 'Vinicius' => 6, ];

$notasBimestre2 = [ 'Ana' => 10, 'João' => 8, 'Roberto' => 7];

var_dump(array_diff($notasBimestre1, $notasBimestre2)); // verifica diferença nos valores

var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); // verifica diferença nas chaves

var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); // verifica diferença na chave e no valor.

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);// mostra apenas as chaves (nomes dos alunos)
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);
var_dump(array_keys($alunosFaltantes));
var_dump(array_values($alunosFaltantes));// exibe apenas as notas

var_dump(array_combine($notasAlunos,$nomesAlunos));// criou um novo array com notas na frete e alunos depois
var_dump(array_flip($alunosFaltantes));// faz a mesma coisa

