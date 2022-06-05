<?php

$notasCursoA = [
    9,
    10,
    9, 5,
    8
];

$notasCursoB = [
    9,
    6,
    7, 5,
    8
];

function mediaNotas(array $notas): float
{
    return array_sum($notas) / count($notas);
}

echo "Média: " . mediaNotas($notasCursoA) . PHP_EOL;
echo "Média: " . mediaNotas($notasCursoB) . PHP_EOL;