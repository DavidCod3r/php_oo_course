<?php

namespace src\Banco\Modelo\Funcionario;

class Diretor extends Funcionario
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