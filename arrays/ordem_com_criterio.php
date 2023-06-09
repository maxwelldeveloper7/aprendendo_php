<?php

$notas = [
    ['aluno' => 'Maria', 'nota' => 10],
    ['aluno' => 'Vinícius', 'nota' => 6],
    ['aluno' => 'Ana', 'nota' => 9]
];

$notasOrdenadas = $notas;

function ordenaNotas(array $nota1, array $nota2)
{
   /* if($nota1['nota'] > $nota2['nota']){
        return -1;
    }

    if($nota1['nota'] < $nota2['nota']){
        return 1;
    }

    return 0;    */
    //ou 
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notasOrdenadas, 'ordenaNotas');

echo 'Desordenadas' . PHP_EOL;
var_dump($notas);
echo PHP_EOL;

echo 'Ordenadas' . PHP_EOL;
var_dump($notasOrdenadas);