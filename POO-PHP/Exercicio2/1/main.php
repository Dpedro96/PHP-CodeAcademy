<?php
require_once "Funcionario.php";
require_once "Gerente.php";

// Criando um funcionário comum
$funcionario = new Funcionario(1, "João", "Assistente");
echo "Funcionário: " . $funcionario->calculaSalario() . "\n";

// Criando um gerente
$gerente = new Gerente(2, "Maria", "Gerente", 10);
echo "Gerente: " . $gerente->calculaSalario() . "\n";
?>
