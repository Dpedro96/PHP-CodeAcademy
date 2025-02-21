<?php
require_once "CalcMemoria.php";
class CalcControle extends CalcMemoria{
    public function opera($num1,$num2,$operador){
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