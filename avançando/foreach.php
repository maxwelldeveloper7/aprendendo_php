<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.489.11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    
    '123.256.789-10' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes[] = [
    'titular' => 'Maxwell',
    'saldo' => 100000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . "-" . $cpf . PHP_EOL;
}