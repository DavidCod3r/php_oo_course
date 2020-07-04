<?php

class Conta
{

    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
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

    public static function recuperaNumeroDeContas() : int
    {
        return self::$numeroDeContas;
    }


}
