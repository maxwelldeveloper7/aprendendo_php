<?php
require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-00','Vinícius');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$segundaConta = new Conta('123.456.789-01','Maxwell');
$segundaConta->depositar(500);
$segundaConta->sacar(100);

echo $segundaConta->recuperarNomeTitular() . PHP_EOL;
echo $segundaConta->recuperarCpfTitular() . PHP_EOL;
echo $segundaConta->recuperarSaldo() . PHP_EOL;

new Conta('111.222.333-44','desconhecido');

echo Conta::recuperaNumeroDeContas() . ' contas' . PHP_EOL;