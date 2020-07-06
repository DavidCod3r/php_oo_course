<?php

use src\Banco\Modelo\CPF;
use src\Banco\Modelo\Funcionario\Diretor;
use src\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor('Joao cleber', new CPF('444.444.444-85'), 10000);

$autenticador->tentaLogin($diretor, '4321');