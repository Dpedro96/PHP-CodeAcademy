<?php
class Animal{
    private $nome;
    private $raca;
    private $qtd_patas;
    private $cor;
    private $peso;
    private $tamanho;

    public function __construct($nome,$raca,$qnt_pata,$cor,$peso,$tamanho){
        $this->nome=$nome;
        $this->raca=$raca;
        $this->qtd_patas=$qnt_pata;
        $this->cor=$cor;
        $this->peso=$peso;
        $this->tamanho=$tamanho;
    }

    public function falar(){
        echo "Barulho de animal";
    }
}

?>