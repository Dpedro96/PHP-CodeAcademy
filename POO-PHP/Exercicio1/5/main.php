<?php
require_once "Contador.php";

$contador=new Contador(20);
echo $contador->get_count(),"\n";
$contador->incrementar();
$contador->incrementar();
$contador->incrementar();
echo $contador->get_count(),"\n";
$contador->zerar();
echo $contador->get_count(),"\n";
?>