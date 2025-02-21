<?php
$triangulo = new Triangulo(10, 5, "Equilátero");
echo "Área do Triângulo: " . $triangulo->calcula_area() . "\n";

$retangulo = new Retangulo(4, 4);
echo "Área do Retângulo: " . $retangulo->calcula_area() . "\n";
echo "O Retângulo é um quadrado? " . ($retangulo->verifica_quadrado() ? "Sim" : "Não") . "\n";
?>