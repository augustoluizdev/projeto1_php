<?php
    require_once "config.inc.php";
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($produto_info = mysqli_fetch_array($resultado)){
        $id = $produto_info['id'];
        $produto = $produto_info['produto'];
        $preco = $produto_info['preco'];
        $descricao = $produto_info['descricao'];
    }
?>

<form action="?pg=altera_produtos" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome do produto:</label>
    <input type="text" name="produto" value="<?=$produto?>">
    <label>Preço:</label>
    <input type="text" name="preco" place_holder="Ex: 0.00" value="<?=$preco?>">
    <label>Descrição:</label>
    <input type="text" name="descricao" value="<?=$descricao?>">
    <br>
    <input type="submit" value="Cadastrar">
</form>