<?php

$frutas = [
    'Laranja',
    'Banana',
    'Abacaxi'
];

$frutas[] = 'Maça';

$frutas[] = 'Tangerina';

$frutas[100] = 'Melnacia';


echo "<ul>";

foreach ($frutas as $cadaFruta) {
    echo "<li>{$cadaFruta}</li>";
}

echo "</ul>";