<?php

namespace src\Banco\Modelo\Funcionario;

use src\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel   
{

    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutencticar(string $senha): bool
    {
        return $senha === '1234';
    }

}