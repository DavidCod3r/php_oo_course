<?php

class Conta
{

    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function saca(float $valorSacar): void
    {
        if ($valorSacar > $this->saldo) {
            echo "Saldo insuficiente" . PHP_EOL;
        } else {
            $this->saldo -= $valorSacar;
        }
    }

    public function deposita(float $valorDeposito): void
    {
        if ($valorDeposito <= 0) {
            echo "O valor para realizar deposito deve ser maior que 0" . PHP_EOL;
        } else {
            $this->saldo += $valorDeposito;
        }
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
