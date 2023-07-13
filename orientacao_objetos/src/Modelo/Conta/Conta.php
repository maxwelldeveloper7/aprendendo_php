<?php

namespace Modelo\Conta;

class Conta
{
    private $titular;
    private $nomeTitular;
    private $saldo = 0;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        if (self::$numeroDeContas > 2){
            echo "Há mais de uma conta ativa";
        }
    }

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo){
            echo "Saldo indisponível";
            return;
        } 
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo){
            echo "saldo indisponível";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo(): float
    {
        return $this-> saldo;
    }
        
    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }
}