<?php

$nome = "Eduardo";
$sobrenome = "Henrique";
$idade = 100;
$cidade = "Codó";

$nome2 = "José";
$nome2 .= "da Silva"; //José da Silva

echo $nome . " " . $sobrenome;

echo "<br>";

echo "Eu me chamo " . $nome . " tenho " . $idade . " anos e mora na cidade de " . $cidade;

echo "<br>";

echo "Eu me chamo {$nome}, tenho {$idade} anos e moro na cidade de {$cidade}";