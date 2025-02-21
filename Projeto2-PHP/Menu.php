<?php
require_once "Humano.php";
require_once "Animal.php";
require_once "Funcionario.php";
require_once "Produto.php";
require_once "Gato.php";
require_once "Cachorro.php";
require_once "Vaca.php";
require_once "Venda.php";
    do{
        $opcao=readline("Escolha uma opção: ");
        switch($opcao){
            //cadastrar Humano
            case 1:
                $nome=readline("Digite o nome: ");
                $idade=readline("Digite a idade: ");
                $endereco=readline("Digite o endereço: ");
                $contato=readline("Digite o contato: ");
                $humano=new Humano($nome,$idade,$endereco,$contato);
                break;
            //Cadastrar Animal
            case 2:
                $nome=readline("Digite o nome do seu animal: ");
                $raca=readline("Digite a raca do seu animal: ");
                $qnt_patas=readline("Digite o número de patas: ");
                $cor=readline("Digite a cor do seu animal: ");
                $peso=readline("Digite o peso do seu animal: ");
                $tamanho=readline("Digite o tamanho do seu animal");
                $animal=new Animal($nome,$raca,$qnt_patas,$cor,$peso,$tamanho);
                break;
            //Cadastrar Gato
            case 3:
                $nome=readline("Digite o nome do seu gato: ");
                $raca=readline("Digite a raca do seu gato: ");
                $qnt_patas=readline("Digite o número de patas: ");
                $cor=readline("Digite a cor do seu gato: ");
                $peso=readline("Digite o peso do seu gato: ");
                $tamanho=readline("Digite o tamanho do seu gato");
                $animal=new Gato($nome,$raca,$qnt_patas,$cor,$peso,$tamanho,$humano);
                break;
            //Cadastrar Cachorro
            case 4:
                $nome=readline("Digite o nome do seu cachorro: ");
                $raca=readline("Digite a raca do seu cachorro: ");
                $qnt_patas=readline("Digite o número de patas: ");
                $cor=readline("Digite a cor do seu cachorro: ");
                $peso=readline("Digite o peso do seu cachorro: ");
                $tamanho=readline("Digite o tamanho do seu cachorro: ");
                $animal=new Cachorro($nome,$raca,$qnt_patas,$cor,$peso,$tamanho,$humano);
                break;
            //Cadastrar Vaca
            case 5:
                $nome=readline("Digite o nome do seu vaca: ");
                $raca=readline("Digite a raca do seu vaca: ");
                $qnt_patas=readline("Digite o número de patas: ");
                $cor=readline("Digite a cor do seu vaca");
                $peso=readline("Digite o peso do seu vaca: ");
                $tamanho=readline("Digite o tamanho do seu vaca: ");
                $animal=new Vaca($nome,$raca,$qnt_patas,$cor,$peso,$tamanho,$humano);
                break;
            //Cadastrar Funcionário
            case 6:
                $nome=readline("Digite o nome: ");
                $idade=readline("Digite a idade: ");
                $endereco=readline("Digite o endereço: ");
                $contato=readline("Digite o contato: ");
                $cargo=readline("Digite o cargo: ");
                $salario=readline("Digite o salário: ");
                $funcionario=new Funcionario($nome,$idade,$endereco,$contato,$salario,$cargo);
                break;
            //cadastrar Produto
            case 7:
                $nome=readline("Digite o nome do produto: ");
                $preco=readline("Digite o preço do produto: ");
                $qnt=readline("Digite a Quantidade no estoque: ");
                $venda=new Venda();
                $venda->cadastrar_produto($nome,$preco,$qnt);
                break;
            //Listar todos os produtos:
            case 8:
                $venda->get_todos_produtos();
                break;
            //Vender Produto
            case 9:
                $nome=readline("Digite o nome do produto: ");
                $produto=$venda->get_produto($nome);
                $qntd=readline("Digite a quantidade que quer comprar do produto: ");
                $venda->venda($humano,$produto,$qntd);
                break;
        }
    }while($opcao!=0);
?>