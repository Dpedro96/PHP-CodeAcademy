<?php
class Retangulo extends Objeto {
    public function calcula_area() {
        return $this->getLargura() * $this->getAltura();
    }

    public function verifica_quadrado() {
        return $this->getLargura() === $this->getAltura();
    }
}
?>