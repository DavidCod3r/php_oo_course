<?php

use src\Banco\Modelo\CPF;
use src\Banco\Modelo\Funcionario;
use src\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umFuncionario = new Funcionario('Pedro da Silva', new CPF('555.555.555-96'), 'Progrmador', 1000);

$umaFuncionaria = new Funcionario('Olivia da Silva', new CPF('545.455.445-96'), 'Progrmadora', 3000);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);


echo $controlador->recuperaTotal();
