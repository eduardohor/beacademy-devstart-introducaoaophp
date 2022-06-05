<?php

$arquivo = fopen('dadosprodutos.csv', 'a+');

fwrite($arquivo, 'Eduardo' . PHP_EOL);
fwrite($arquivo, 'Pedro' . PHP_EOL);
fwrite($arquivo, 'Marcos' . PHP_EOL);

fclose($arquivo);