<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$cpfVinicius = new Cpf('123.456.789-00');
$vinicius = new Titular($cpfVinicius,'Vinícius');
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$cpfMaxwell = new Cpf('123.456.789-01');
$maxwell = new Titular($cpfMaxwell,'Maxwell');
$segundaConta = new Conta($maxwell);
$segundaConta->depositar(500);
$segundaConta->sacar(100);

echo $segundaConta->recuperarNomeTitular() . PHP_EOL;
echo $segundaConta->recuperarCpfTitular() . PHP_EOL;
echo $segundaConta->recuperarSaldo() . PHP_EOL;

new Conta(new Titular(new Cpf('111.222.333-44'),'desconhecido'));

echo Conta::recuperaNumeroDeContas() . ' contas' . PHP_EOL;