<?php
 class Universidade{
    private $nome;

    function __construct($nome){
        $this->nome=$nome;
    }
    
    public function get_nome(){
        return $this->nome;
    }
 }
?>