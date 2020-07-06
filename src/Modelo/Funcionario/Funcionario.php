<?php

namespace src\Banco\Modelo\Funcionario;

use src\Banco\Modelo\CPF;
use src\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }


    public function recuperaSalario(): float 
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if($valorAumento < 0){
            echo "Aumento deve ser positivo" . PHP_EOL;
        }else{
            $this->salario += $valorAumento;
        }
    }

    abstract public function calculaBonificacao(): float;


}