<?php

$sapato = [
    'nome' => 'Tênis Azul',
    'preco' => '180.00',
    'descricao' => 'Par de tênis azuis com Cordões',
    'foto' => 'https://images.pexels.com/photos/19090/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
];

$calça = [
    'nome' => 'Calça Jeans',
    'preco' => '193.50',
    'descricao' => 'Calça jeans preta ',
    'foto' => 'https://images.pexels.com/photos/65676/nanjing-studio-jeans-65676.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
];

$camiseta = [
    'nome' => 'Camiseta',
    'preco' => '88.40',
    'descricao' => 'Camiseta preta ',
    'foto' => 'https://images.pexels.com/photos/8532611/pexels-photo-8532611.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
];

$mochila = [
    'nome' => 'Mochila',
    'preco' => '102.24',
    'descricao' => 'Mochila Preta 80l ',
    'foto' => 'https://images.pexels.com/photos/1546003/pexels-photo-1546003.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
];

$relogio = [
    'nome' => 'Relógio',
    'preco' => '340.50',
    'descricao' => 'Relógio marrom com pulseira marrom e preto ',
    'foto' => 'https://images.pexels.com/photos/9862417/pexels-photo-9862417.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
];


$produtos = [
    $calça,
    $sapato,
    $camiseta,
    $mochila,
    $relogio
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">



<div class="container">
    <h1 class="mt-5">Produtos</h1>
    <hr>
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th>Nome</th>
                <th>Preço</th>
                <th>Descriçao</th>
                <th>Foto</th>
            </tr>

        </thead>

        <tbody>
            <?php
            foreach ($produtos as $produto)
                echo "<tr>
                        <td>{$produto['nome']}</td>
                        <td>{$produto['preco']}</td>        
                        <td>{$produto['descricao']}</td> 
                       <td><img src='{$produto["foto"]}' width='100px'></img> </td>       
                    </tr>"
            ?>
        </tbody>
    </table>
</div>