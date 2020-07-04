<?php

namespace src\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transfere(Conta $contaDestino, float $valorTransferir): void
    {
        if ($valorTransferir > $this->saldo) {
            echo "Saldo insuficiente" . PHP_EOL;
        } else {
            $this->saca($valorTransferir);
            $contaDestino->deposita($valorTransferir);
        }
    }
}