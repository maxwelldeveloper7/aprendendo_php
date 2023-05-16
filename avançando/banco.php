<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

/**
 * Summary of sacar
 * @param mixed $conta
 * @param mixed $valorASacar
 * @return array
 */
function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

/**
 * Summary of depositar
 * @param mixed $conta
 * @param mixed $valorADepositar
 * @return array
 */
function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else{
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

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
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
