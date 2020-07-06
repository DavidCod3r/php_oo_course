<?php

namespace src\Banco\Service;

use src\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->podeAutencticar($senha)){
            echo "Ok, Usuario logado no sistema" . PHP_EOL;
        }else{
            echo "ops, Senha incorreta" . PHP_EOL;
        }
    }
}