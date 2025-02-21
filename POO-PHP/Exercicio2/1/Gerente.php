<?php
require_once "Funcionario.php";
class Gerente extends Funcionario{ 
    private $quantidadeDeColaboradores;

    public function __construct($id, $nome, $cargo, $quantidadeDeColaboradores){
        parent::__construct($id, $nome, $cargo);
        $this->quantidadeDeColaboradores = $quantidadeDeColaboradores;
    }

    public function calculaSalario(){
        return 5000;
    }

}
?>