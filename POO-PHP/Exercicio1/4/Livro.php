<?php
include_once "Pessoa.php";
class Livro{
    private $nome;
    private $autor;
    private $numero_paginas;
    private $disponivel=true;
    private Pessoa $pessoa;

    function __construct($nome,$autor,$numero_paginas,){
        $this->nome=$nome;
        $this->autor=$autor;
        $this->numero_paginas=$numero_paginas;
    }

    public function alugar_livro($pessoa){
        if($this->disponivel==true){
            $this->pessoa=$pessoa;
            $this->disponivel=false;
            echo "Livro alugado para ".$pessoa->get_nome(),"\n";
        }else{
            echo "Livro Indisponível está alugado por ".$this->pessoa->get_nome(),"\n";
        }
    }

    public function devolver_livro(){
        if($this->disponivel==false){
            $this->disponivel=true;
            unset($this->pessoa);
            echo "Livro devolvido com sucesso!!\n";
        }else{
            echo "Livro não foi alugado\n";
        }
    }
}
?>