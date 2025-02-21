<?php
require_once "Universidade.php";

class Pessoa extends Universidade{
    private $nome;
    private Universidade $universidade;

    public function __construct($nome, $universidade){
        $this->nome=$nome;
        $this->universidade=$universidade;
    }

    public function imprime_nome_e_universidade(){
        echo "$this->nome trabalha na Universidade ".$this->universidade->get_nome(),"\n";
    }

}
?>