<?php

namespace src\Banco\Modelo;

interface Autenticavel
{
    public function podeAutencticar(string $senha): bool;
}