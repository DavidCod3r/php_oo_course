<?php

use src\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco1 = new Endereco('Cidade Tiradentes', 'bairro qualquer', 'rua sem nome', '8577Z');
$endereco2 = new Endereco('Rio', 'centro', 'rua 007', '077');

echo $endereco1;
echo $endereco2;

echo $endereco2->bairro;
