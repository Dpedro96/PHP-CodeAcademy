<?php
require_once "Animal.php";
require_once "Humano.php";
class Gato extends Animal{
    private Humano $humano;
    public function __construct($nome,$raca,$qnt_pata,$cor,$peso,$tamanho,$humano){
        parent::__construct($nome,$raca,$qnt_pata,$cor,$peso,$tamanho);
        $this->humano=$humano;
    }

    public function falar(){
        echo "Miau Miau\n";
    }
}
?>