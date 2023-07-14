<?php

namespace Alura\Banco\Modelo\Conta;
/*
spl_autoload_register(function(string $nomeCompletoClasse){
    $caminhoDaClasse =  str_replace('Alura\\Banco', 'src',$nomeCompletoClasse);
    $caminhoDaClasse = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoDaClasse);
    $caminhoDaClasse .= '.php';
    echo $caminhoDaClasse;
    exit();
});*/
require_once 'src/Modelo/Pessoa.php';
use Alura\Banco\Modelo\{Pessoa, Endereco, CPF};

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }    

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}