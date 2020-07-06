<?php

namespace src\Banco\Modelo\Conta;

use src\Banco\Modelo\Autenticavel;
use src\Banco\Modelo\CPF;
use src\Banco\Modelo\Endereco;
use src\Banco\Modelo\Pessoa;

class Titular extends Pessoa implements Autenticavel
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

    function podeAutencticar(string $senha): bool
    {
        return $senha === 'abcd';
    }

}
