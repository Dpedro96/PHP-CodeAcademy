<?php
require_once "Pessoa.php";

$universidade=new Universidade('Unicentro');
$universidade1=new Universidade("Campo Real");
$pessoa=new Pessoa("Pedro",$universidade);
$pessoa2=new Pessoa("Giovane",$universidade1);

$pessoa->imprime_nome_e_universidade();
$pessoa2->imprime_nome_e_universidade();
?>