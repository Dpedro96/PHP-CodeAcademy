<?php
require_once "CalcControle.php";
class CalcMemoria{
    private $num1;
    private $num2;
    private $operador;

    public function salva($num1,$num2,$operador) {
        $this->num1=$num1;
        $this->num2=$num2;
        $this->operador=$operador;
    }
}
?>