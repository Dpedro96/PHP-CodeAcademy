<?php
require_once "CalcControle.php";
class CalcMemoria{
    private $num1;
    private $num2;
    private $operador;
    private CalcControle $controle;

    public function __construct($num1,$num2,$operador) {
        $this->num1=$num1;
        $this->num2=$num2;
        $this->operador=$operador;
        $this->controle = new CalcControle();
    }
}
?>