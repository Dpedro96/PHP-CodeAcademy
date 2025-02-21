<?php
require_once "Produto.php";
class Pedido{
    private Produto $produto;
    private $qntd;

    public function __construct($produto, $qntd){
        if($produto->get_estoque()>=$qntd){
            $this->produto=$produto;
            $this->qntd=$qntd;
            $produto->set_estoque($qntd);
        }
    }

    public function valor(){
       return $this->produto->get_preco()*$this->qntd;
    }
}
?>