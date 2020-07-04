<?php

use src\Banco\Modelo\Conta\Conta;
use src\Banco\Modelo\Conta\Titular;
use src\Banco\Modelo\CPF;
use src\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco = new Endereco('Petropolis', 'um bairro', 'minha rua', '71K');
$fulano = new Titular(new CPF('123.456.789-11'), 'Fulano de tal', $endereco);
$primeiraConta = new Conta($fulano);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);


echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;


$patricia = new Titular(new CPF('987.654.321-12'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

echo Conta::recuperaNumeroDeContas();