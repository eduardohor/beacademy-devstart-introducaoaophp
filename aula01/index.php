<form action="" method="post">
    <input name="nome" placeholder="Nome"> <br>
    <input name="cidade" placeholder="Cidade"><br>
    <button>Enviar</button>

</form>

<?php
if ($_POST) {

    echo "Olá " . $_POST['nome'];
}


?>