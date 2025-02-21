<?php
class Funcionario{
    private $id;
    private $nome;
    private $cargo;

    public function __construct($id,$nome,$cargo){
        $this->id=$id;
        $this->nome=$nome;
        $this->cargo=$cargo;
    }

    public function calculaSalario(){
        return 2000;
    }
}

?>