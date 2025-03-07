<?php
require_once "CalcInterface.php";
require_once "CalcMemoria.php";
require_once "CalcControle.php";

$model=new CalcMemoria();
$controler=new CalcControle($model);
$calculadora=new CalcInterface($controler);
$calculadora->entrada();
?>