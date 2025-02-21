<?php
class Triangulo extends Objeto {
    private $tipo;

    public function __construct($largura, $altura, $tipo) {
        parent::__construct($largura, $altura);
        $this->tipo = $tipo;
    }

    public function calcula_area() {
        return ($this->getLargura() * $this->getAltura()) / 2;
    }
}
?>