<?php

namespace src\Banco\Modelo\Funcionario;

use src\Banco\Modelo\CPF;
use src\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{

    private string $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaCargo(): string 
    {
        return $this->cargo;
    }

    public function recuperaSalario(): float 
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if($valorAumento < 0){
            echo "Aumento deve ser positivo" . PHP_EOL;
        }else{
            $this->salario += $valorAumento;
        }
    }


}