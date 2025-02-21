<?php
require_once "Humano.php";
require_once "Produto.php";
class Venda{
    private $produto;
    private $qntd;
    private Humano $humano;

    public function cadastrar_produto($nome,$preco,$qntd_estoque){
        $this->produto[]=new Produto($nome,$preco,$qntd_estoque);
    } 

    public function get_todos_produtos(){
        foreach($this->produto as $item){
            print_r($item);
        }        
    }

    public function get_produto($nome){
        foreach($this->produto as $item){
            if($item->get_nome()==$nome){
                return $item;
            }
        }
    }

    public function venda($humano,$produto,$qntd){
        if($qntd<=$produto->get_qntd_estoque()){
            $this->qntd=$qntd-$produto->get_qntd_estoque();
            $produto->set_qntd_estoque($this->qntd);
            echo "O ".$humano->get_nome()." comprou $qntd ".$produto->get_nome(),"\n";
        }
    }
}
?>