<?php
require_once "CalcControle.php";
class CalcInterface{
    private CalcControle $controler;
    public function __construct($controler)
    {
        $this->controler=$controler;
    }
    public function entrada(){
        $num=readline("Digite o primeiro número: ");
        $num2=readline("Digite o segundo número: ");
        $operador=readline("Digite o operador: ");
        echo "$num$operador$num2 = ". $this->controler->opera($num,$num2,$operador);
    }
}

?>