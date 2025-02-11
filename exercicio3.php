<?php
    $letra = readline("Escolha uma opção (1-10): ");

    //1)Escreva um algoritmo para imprimir os números de 1 (inclusive) a 10 (inclusive) em ordem crescente.
    function um_a_dez(){
        for($i=1;$i<11;$i++){
            echo "$i ";
        }
    }

    //2)Elaborar um programa que leia 10 valores inteiros e no final apresente a somatória e a média deles.
    function media(){
        $soma=0;
        for($i=0;$i<10;$i++){
            $soma+=readline();
        }
        echo "Somatória = $soma  Média = " . $soma/10;
    }

    /*3)Elaborar um programa que leia sucessivamente valores inteiros e no final apresente a somatória, 
    a média e a quantidade de valores lidos. O programa deve ler os valores enquanto o usuário estiver
    fornecendo valores diferentes de zero.*/
    function soma_media(){
        $num=[];
        $entrada=1;
        while($entrada!=0){
            $entrada=readline();
            array_push($num,$entrada);
        }
        $soma=array_sum($num);
        $tamanho=sizeof($num)-1;
        echo "Somatória = $soma \nMédia = ".$soma/$tamanho."\nNumero de Entradas = $tamanho";
    }

    //4)Elaborar um programa que apresente o resultado da soma e 
    //a média dos valores pares situados na faixa numérica de 50 a 70.
    function media50_70(){
        $soma=0;
        $cont=0;
        for($i=50;$i<70;$i++){
            if($i%2==0){
                $soma+=$i;
                $cont++;
            }
        }
        echo "Soma = $soma\nMéida = ".$soma/$cont; 
    }

    //5)Elaborar um programa que leia valores inteiros até que o valor zero seja informado. 
    //No final deve ser apresentado o maior e o menor valor fornecido pelo usuário.
    function maior_menor(){
        $maior=0;
        $menor=0;
        $entrada=0;
        do{
            $entrada=(int)readline();
            if($entrada<$menor){
                $menor=$entrada;
            }
            if($entrada>$maior){
                $maior=$entrada;
            }
        }while($entrada!=0);
        echo "Maior Valor = $maior\nMenor Valor = $menor";
    }

    //—------------------------- OPCIONAIS —------------------------
    /*6)Escreva um algoritmo para ler as notas da 1a. e 2a. avaliações de um aluno,
    calcule e imprima a média (simples) desse aluno. Só devem ser aceitos valores válidos durante 
    a leitura (0 a 10) para cada nota. Após o cálculo da nota de um aluno, a mensagem 'NOVO CÁLCULO (S/N)?' deverá
    aparecer. Se for respondido 'S' deve ser executado um novo cálculo, caso contrário deverá encerrar o algoritmo.*/
    function media_aluno(){
        do{
            $nota1=readline('Primeira nota: ');
            $nota2=readline('Segunda nota: ');
            if($nota1>=0&&$nota1<=10&&$nota2>=0&&$nota2<=10){
                echo "Média = ".($nota1+$nota2)/2,"\n";
            }else{
                echo "Valor Inválido, coloque uma nota de 1 até 10\n";
            }
            $continuar=readline('NOVO CÁLCULO (S/N)? ');
        }while($continuar=="S"||$continuar=="s");
    }

    //7)Ler 10 valores e após a leitura escrever quantos desses valores lidos são NEGATIVOS.
    function dez_numeros(){
        $negativo=0;
        for($i=0;$i<10;$i++){
            $array[$i]=readline();
            if($array[$i]<0){
                $negativo++;
        }
        echo "Números Negativos = $negativo";
        }
    }

    /*8)Uma loja está levantando o valor total de todas as mercadorias em estoque. 
    Escreva um algoritmo que permita a entrada das seguintes informações: 
        a)o número total de mercadorias no estoque; 
        b)o valor de cada mercadoria. Ao final imprimir o valor total em estoque e a média de valor das mercadorias*/
    function estoque(){
        $num_mercadorias=readline();
        $valor_total=0;
        for($i=0;$i<$num_mercadorias;$i++){
            $valor_total+=readline();
        }
        echo "Valor total em mercadorias = R$".number_format($valor_total,2,",",".")."\nMédia = R$".number_format($valor_total/$num_mercadorias,2,",",".");
    }

    /*9)O mesmo exercício anterior, mas agora não será informado o número de mercadorias em estoque.Então o 
    funcionamento deverá ser da seguinte forma: ler o valor da mercadoria e perguntar ‘MAIS MERCADORIAS (S/N)?’.
    Ao final, imprimir o valor total em estoque e a média de valor das mercadorias em estoque.*/
    function estoque_2(){
        $valor_total=0;
        $cont=0;
        do{
            $valor_total+=readline();
            $cont++;
            $continuar=readline("MAIS MERCADORIAS (S/N)?");
        }while($continuar=="S"||$continuar=="s");
        echo "Valor total em mercadorias = R$".number_format($valor_total,2,",",".")."\nMédia = R$".number_format($valor_total/$cont,2,",",".");
    }

    //10)Escreva um algoritmo que imprima a tabuada (de 1 a 10) para os números de 1 a 10.
    function tabuada(){
        for($i=1;$i<=10;$i++){
            for($j=1;$j<=10;$j++){
                echo "$i X $j = ".$i*$j,"\n";
            }
        }
    }

    switch($letra){
        case "1":
            um_a_dez();
            break;
        case "2":
            media();
            break;
        case "3":
            soma_media();
            break;
        case "4":
            media50_70();
            break;
        case "5":
            maior_menor();
            break;
        case "6":
            media_aluno();
            break;
        case "7":
            dez_numeros();
            break;
        case "8":
            estoque();
            break;
        case "9":
            estoque_2();
            break;
        case "10":
            tabuada();
            break;        
        default:
            echo "Opção inválida.";
            break;
    }
?>