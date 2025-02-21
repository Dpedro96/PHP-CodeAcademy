<?php
class Contador{
    private $count;
    
    public function __construct($count) {
        $this->count = $count;
    }

    public function zerar(){
        $this->count=0;
    }
    public function incrementar(){
        $this->count++;
    }
    public function get_count(){
        return $this->count;
    }
}
?>