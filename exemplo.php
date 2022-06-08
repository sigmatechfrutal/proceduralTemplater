<?php 
require 'caminho/templater.php';

$pagina =  'notificacao.html';

$dados = array(
    "{{ID_PEDIDO}}" => "80800",
    "{{VALOR_COMPRA}}" => "100,00"
);

$render = templater($pagina, $dados);

echo $render;
