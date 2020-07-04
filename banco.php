<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->saca(200);

echo $primeiraConta->recuperaSaldo();