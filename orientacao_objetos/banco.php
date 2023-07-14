<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\{Endereco, CPF};
use Alura\Banco\Modelo\Conta\{Conta, Titular};

$endereco = new Endereco("Nanuque", "Vila Nova", "Rua Rio Grande do Norte", "635A");
$cpfVinicius = new CPF('123.456.789-00');
$vinicius = new Titular($cpfVinicius,'Vinícius', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$cpfMaxwell = new Cpf('123.456.789-01');
$maxwell = new Titular($cpfMaxwell,'Maxwell', $endereco);
$segundaConta = new Conta($maxwell);
$segundaConta->depositar(500);
$segundaConta->sacar(100);

//var_dump($segundaConta);

echo $segundaConta->recuperarNomeTitular() . PHP_EOL;
echo $segundaConta->recuperarCpfTitular() . PHP_EOL;
echo $segundaConta->recuperarSaldo() . PHP_EOL;

echo Conta::recuperaNumeroDeContas() . ' contas' . PHP_EOL;