<?php

    require_once "config.inc.php";

    $id = $_POST['id'];
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $sql = "UPDATE produtos SET
            produto = '$produto',
            preco = '$preco',
            descricao = '$descricao'
            WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "Cadastro Alterado com sucesso!<br>";
        echo "<a href='?pg=admin_produtos'>Voltar</a>";
    }else{
        echo "Houve um erro na alteração.";
        echo "<a href='?pg=admin_produtos'>Voltar</a>";
    }