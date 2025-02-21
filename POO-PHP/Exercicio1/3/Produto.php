<?php
class Produto{
    private $nome;
    private $preco;
    private $estoque;

    function __construct($nome,$preco,$estoque){
        $this->nome=$nome;
        $this->preco=$preco;
        $this->estoque=$estoque;
    }
    
    function get_nome(){
        return $this->nome;
    }
    function get_preco(){
        return $this->preco;
    }
    function get_estoque(){
        return $this->estoque;
    }
    function set_estoque($qtnd){
        $this->estoque-=$qtnd;
    }
}
?>