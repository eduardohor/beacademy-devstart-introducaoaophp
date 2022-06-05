<?php

declare(strict_types=1);

function welcome(string $nome): string
{
    return "Bem vindo " . $nome;
}

function soma(int $n1, int $n2): float
{
    return $n1 + $n2;
}

echo soma(10, 20);