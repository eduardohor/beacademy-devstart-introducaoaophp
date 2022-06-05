<?php

$frutas = [
    'Laranja',
    'Banana',
    'Abacaxi'
];

$frutas[] = 'Maça';

$frutas[10] = 'Melancia';

$frutas[7] = 'Morango';

$frutas[] = 'Tangerina';

?>

<ul>
    <li><?php echo $frutas[0]; ?></li>
    <li><?php echo $frutas[1]; ?></li>
    <li><?php echo $frutas[2]; ?></li>
    <li><?php echo $frutas[3]; ?></li>
    <li><?php echo $frutas[7]; ?></li>
    <li><?php echo $frutas[10]; ?></li>
    <li><?php echo $frutas[11]; ?></li>

</ul>