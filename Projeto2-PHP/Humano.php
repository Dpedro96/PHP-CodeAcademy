<?php
class Humano{
    private $nome;
    private $idade;
    private $endereco;
    private $contato;

    public function __construct($nome,$idade,$endereco,$contato){
        $this->nome=$nome;
        $this->idade=$idade;
        $this->endereco=$endereco;
        $this->contato=$contato;
    } 

    public function get_nome(){
        return $this->nome;
    }
} 
?>