<?php

class Conta
{

    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->cpfTitular = $cpfTitular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }

    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

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

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }


    public static function recuperaNumeroDeContas() : int
    {
        return self::$numeroDeContas;
    }


}
