<?php
class Pessoa{
    private $nome;
    private $endereco;
    private $email;
    private $telefone;

    function __construct($nome,$endereco,$email,$telefone){
        $this->nome=$nome;
        $this->endereco=$endereco;
        $this->email=$email;
        $this->telefone=$telefone;
    }

    public function get_nome(){
        return $this->nome;
    }
}
?>