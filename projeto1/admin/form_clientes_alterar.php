<?php
    require_once "config.inc.php";
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM clientes WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($cliente = mysqli_fetch_array($resultado)){
        $id = $cliente['id'];
        $nome = $cliente['cliente'];
        $email = $cliente['email'];
        $estado = $cliente['estado'];
    }
?>

<form action="?pg=altera_clientes" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome do cliente:</label>
    <input type="text" name="cliente" value="<?=$nome?>">
    <label>Cidade:</label>
    <input type="text" name="email" value="<?=$email?>">
    <label>Estado:</label>
    <input type="text" name="estado" value="<?=$estado?>">
    <br>
    <input type="submit" value="Cadastrar">
</form>