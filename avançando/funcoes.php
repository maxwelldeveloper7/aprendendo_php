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
