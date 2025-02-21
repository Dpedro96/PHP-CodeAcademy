<?php
require_once "Itens.php";
require_once "Pedido.php";
require_once "Produto.php";

$produto=new Produto('arroz',20,10);
$produto1=new Produto('feijao',12,10);
$produto2=new Produto('frango',40,10);
$itens=new Itens();
$itens->adicionar_item($produto,10);
$itens->adicionar_item($produto1,10);
$itens->adicionar_item($produto2,10);
$itens->valor_final();
$itens->finalizar_pedido('Cheque');
?>