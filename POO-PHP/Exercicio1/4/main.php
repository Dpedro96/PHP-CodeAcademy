<?php
require_once "Livro.php";
require_once "Pessoa.php";

$livro=new Livro("Senhor dos Anéis:A Sociedade do Anel","J.R.R Tolkien",576);
$livro1=new Livro("Senhor dos Anéis: Duas Tores","J.R.R Tolkien",464);
$pessoa=new Pessoa("Pedro","Rua Exemplo","exemplo@gmail.com","43996969696");
$pessoa1=new Pessoa("Moacir","Rua Exemplo","exemplo@gmail.com","43996969696");
$livro->alugar_livro($pessoa);
$livro->alugar_livro($pessoa1);
$livro->devolver_livro();
$livro->alugar_livro($pessoa1);
$livro1->alugar_livro($pessoa);
?>