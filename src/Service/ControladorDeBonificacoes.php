<?php

namespace src\Banco\Service;

use src\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }


    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }



}