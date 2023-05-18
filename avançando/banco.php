<?php

//include 'banco.php';

require 'banco.php';

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

$contasCorrentes['123.456.489.11'] = sacar($contasCorrentes['123.456.489.11'], 500);

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 300);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}
