<?php

namespace src\Banco\Modelo\Funcionario;

use src\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{

    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }

    public function podeAutencticar(string $senha): bool
    {
        return $senha === '4321';
    }

}