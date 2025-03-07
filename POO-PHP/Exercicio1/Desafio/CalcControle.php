<?php
require_once "CalcMemoria.php";
class CalcControle extends CalcMemoria{
    private CalcMemoria $memoria;

    public function __construct($memoria)
    {
        $this->memoria=$memoria;
    }

    public function opera($num1,$num2,$operador){
        $this->memoria->salva($num1,$num2,$operador);
        switch($operador){
            case "+":
                return $num1+$num2;
                break;
            case "-":
                return $num1-$num2;
                break;
            case "*":
                return $num1*$num2;
                break;
            case "/":
                return $num1/$num2;
                break;
            default:
                echo "Operador Inválido";
                break;
        }
    }
}
?>