<?php
class Produto{
    private $nome;
    private $preco;
    private $qntd_estoque;

    public function __construct($nome,$preco,$qntd_estoque){
        $this->nome=$nome;
        $this->preco=$preco;
        $this->qntd_estoque=$qntd_estoque;
    }

    public function get_preco(){
        return $this->preco;
    }
    public function get_nome(){
        return $this->nome;
    }
    public function get_qntd_estoque(){
        return $this->qntd_estoque;
    }
    public function set_qntd_estoque($qntd_estoque){
        $this->qntd_estoque=$qntd_estoque;
    }
}
?>