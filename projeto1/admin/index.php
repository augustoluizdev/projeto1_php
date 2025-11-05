<?php
require_once 'header.php';

$allowed = [
    'admin_clientes','admin_produtos',
    'form_produtos','form_produtos_alterar',
    'cadastra_produtos','altera_produtos','delete_produto',
    'form_clientes','form_clientes_alterar',
    'cadastra_clientes','altera_clientes','delete_cliente'
];

if (empty($_GET['pg'])) {
    echo "<section class='card'><h3>Bem-vindo ao painel admin.</h3><p class='plain-list'>Use o menu para navegar entre clientes e produtos.</p></section>";
} else {
    $pg = basename($_GET['pg']);
    if (in_array($pg, $allowed) && file_exists(__DIR__ . "/$pg.php")) {
        include_once "$pg.php";
    } else {
        echo "<section class='card'><h3>Página não encontrada</h3></section>";
    }
}

require_once 'footer.php';

?>