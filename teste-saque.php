<?php

use src\Banco\Modelo\Conta\Conta;
use src\Banco\Modelo\Conta\ContaCorrente;
use src\Banco\Modelo\Conta\Titular;
use src\Banco\Modelo\CPF;
use src\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaCorrente(new Titular(new CPF('111.111.111-14'), 'Jose da silva', new Endereco('São Paulo', 'testes',  'Quebrada 9', '67')), 2);

$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();