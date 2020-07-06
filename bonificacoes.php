<?php

use src\Banco\Modelo\CPF;
use src\Banco\Modelo\Funcionario\Desenvolvedor;
use src\Banco\Modelo\Funcionario\Diretor;
use src\Banco\Modelo\Funcionario\Funcionario;
use src\Banco\Modelo\Funcionario\Gerente;
use src\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor('Pedro da Silva', new CPF('555.555.555-96'), 'Progrmador', 1000);

$gerente = new Gerente('Olivia da Silva', new CPF('545.455.445-96'), 'gerente', 3000);

$diretor = new Diretor('Ana silva', new CPF('541.258.654-52'), 'diretora', 5000);


$umFuncionario->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($gerente);
$controlador->adicionaBonificacaoDe($diretor);


echo $controlador->recuperaTotal();
