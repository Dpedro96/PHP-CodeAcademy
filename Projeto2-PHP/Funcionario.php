<?php
require_once "Humano.php";
class Funcionario extends Humano{
    private $salario;
    private $cargo;
    public function __construct($nome,$idade,$endereco,$contato,$salario,$cargo){
        parent::__construct($nome,$idade,$endereco,$contato);
        $this->salario=$salario;
        $this->cargo=$cargo;
    }

    public function get_salario(){
       return $this->salario;
    }
    public function get_cargo(){
        return $this->cargo;
    }
}
?>