<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-11', 'Fulano de tal');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);


echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;


$segundaConta = new Conta('987.654.321-12', 'Patricia');
var_dump($segundaConta);

echo Conta::$recuperaNumeroDeContas();