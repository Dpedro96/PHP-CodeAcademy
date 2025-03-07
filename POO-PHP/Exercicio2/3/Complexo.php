<?php
class Complexo{
    private float $real;
    private float $imaginario;

    public function __construct($real,$imaginario){
        $this->real=$real;
        $this->imaginario=$imaginario;
    }

    public function modulo(){
        return sqrt(pow($this->real,2)+pow($this->imaginario,2));
    }

    public function angulo(){
        
    }
}
?>