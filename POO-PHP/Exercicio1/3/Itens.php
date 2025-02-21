<?php
require_once "Pedido.php";
class Itens{
   private $itens;
   private $formaPagamento;
   private $valor; 
    public function adicionar_item($produto,$qntd){
        $this->itens[]=new Pedido($produto,$qntd);
    }

    function valor_final(){
        $this->valor=0;
        foreach($this->itens as $item){
            $this->valor+=$item->valor();
        }
    }

    public function finalizar_pedido($formaPagamento){
        echo "O valor total foi de $this->valor";
        $this->formaPagamento=$formaPagamento;
    }
}
?>