<?php

$a1 = [
    'nome' => 'Chiquin',
    'email' => 'chiquin@gmail.com',
    'telefone' => '88 9 8727-3782',
    'notas' => [
        9,
        10,
        8
    ]
];

$a2 = [
    'nome' => 'Maria',
    'email' => 'maria@gmail.com',
    'telefone' => '88 9 3432-4444',
    'notas' => [
        9,
        10,
        8
    ]
];

$alunos = [
    $a1,
    $a2
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">Alunos</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead>
            <tr class="table-dark">
                <th>Nome</th>
                <th>Email</th>
                <th>Tefefone</th>
            </tr>

        </thead>

        <tbody>
            <?php foreach ($alunos as $aluno)
                echo "<tr>
                    <td>{$aluno['nome']}</td>
                    <td>{$aluno['email']}</td>        
                    <td>{$aluno['telefone']}</td>        
                 </tr>"
            ?>
        </tbody>
    </table>
</div>