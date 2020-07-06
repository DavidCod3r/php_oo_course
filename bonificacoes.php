<?php

use src\Banco\Modelo\CPF;
use src\Banco\Modelo\Funcionario\Desenvolvedor;
use src\Banco\Modelo\Funcionario\Diretor;
use src\Banco\Modelo\Funcionario\EditorVideo;
use src\Banco\Modelo\Funcionario\Funcionario;
use src\Banco\Modelo\Funcionario\Gerente;
use src\Banco\Service\ControladorDeBonificacoes;

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor('Pedro da Silva', new CPF('555.555.555-96'),  1000);

$gerente = new Gerente('Olivia da Silva', new CPF('545.455.445-96'), 3000);

$diretor = new Diretor('Ana silva', new CPF('541.258.654-52'), 5000);

$editor = new EditorVideo('Edison arantes', new CPF('874.547.888-99'), 1780);


$umFuncionario->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($gerente);
$controlador->adicionaBonificacaoDe($diretor);
$controlador->adicionaBonificacaoDe($editor);


echo $controlador->recuperaTotal();
