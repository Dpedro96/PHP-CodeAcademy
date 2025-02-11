<?php
    $letra = readline("Escolha uma opção (1-12): ");

    //1)Escreva um programa que declare um array. O array deve ser preenchido automaticamente 
    //com números múltiplos de 5 até possuir 10 elementos. Depois disso imprima cada valor.
    function multiplo_cinco(){
        $numeros=[];
        $valor=5;
        while(count($numeros)<10){
            array_push($numeros,$valor);
            $valor+=5;
        }
        print_r($numeros);
    }

    /*2)Entre com 10 números e armazene em um vetor. Ao final o programa deverá mostrar: 
        a)Quantos negativos foram digitados; 
        b)Quantos positivos foram digitados; 
        c)Quantos pares e ímpares.*/ 
    function dez_numeros(){
        $negativo=0;
        $positivo=0;
        $par=0;
        $impar=0;
        for($i=0;$i<10;$i++){
            $array[$i]=readline();
            if($array[$i]<0){
                $negativo++;
            }else{
                $positivo++;
            }
            if($array[$i]%2==0){
                $par++;
            }else{
                $impar++;
            }
        }
        echo "a)Negativos = $negativo\nb)Positivos = $positivo\nc)Pares = $par | Ímpares = $impar";
    }

    //3)Ler um vetor de 10 posições (aceitar somente números positivos). 
    //Escrever a seguir o valor do maior elemento do vetor e a respectiva posição que ele ocupa no vetor.
    function maior_valor(){
        $maior=0;
        $posicao=0;
        $num=0;
        for($i=0;$i<10;$i++){
            do{
                $num=readline();
            }while($num<0);
            $array[$i]=$num;
            if($maior<$array[$i]){
                    $maior=$array[$i];
                    $posicao=$i;
                }
            }
        echo "O maior valor = $maior\nNa posição $posicao ";
    }

    //4)Ler um vetor A de 10 números. Após, ler mais um número e guardar em uma variável B.Armazenar em
    //um vetor C o resultado de cada elemento de A multiplicado pelo valor B. Logo após, imprimir o vetor C.
    function soma_de_vetor(){
        $a=[];
        $c=[];
        for($i=0;$i<10;$i++){
            $a[$i]=readline();
        }
        $b=readline();
        foreach($a as $as){
            array_push($c,$as*$b);
        }
        print_r($c);
    }

    //5)Faça um algoritmo para ler 10 números e armazenar em um vetor. Após a leitura 
    //total dos 10 números, o algoritmo deve escrever esses 10 números lidos na ordem inversa.
    function inverso(){
        $array=[];
        for($i=1;$i<=10;$i++){
            $array[$i]=readline();
        }
        $i=count($array);
        while($i!=0){
            echo "[$array[$i]]";
            $i--;
        }
    }

    /*6)Crie dois vetores, cada um com capacidade para armazenar 10 números. Solicite ao usuário
    que entre com os valores nestes dois vetores. O programa deverá mostrar a multiplicação dos
    dados dos vetores, em cada um de suas respectivas posições. Ex. vetor_a[0] * vetor_b[0] e assim por diante.*/
    function multiplicao_vetor(){
        $a=[];
        $b=[];
        for($i=0;$i<10;$i++){
            $a[$i]=readline();
        }
        for($i=0;$i<10;$i++){
            $b[$i]=readline();
        }
        for($i=0;$i<10;$i++){
        echo "[$i]=>$a[$i]X$b[$i] = ".$a[$i]*$b[$i]."\n";
        }
    }

    //7)Crie um vetor que armazene o nome de todos os meses do ano. 
    //Peça ao usuário que digite um número e ele informe qual o nome do mês correspondente. 
    function calendário(){
        $num=readline();
        $calendario=['janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro '];
        if($num>0&&$num<13){
            echo $calendario[$num-1];
        }else{
            echo "Número Inválido";
        }
    }

    /*8)Escreva um algoritmo que permita a leitura das notas de uma turma de 20 alunos.
    Calcular a média da turma e contar quantos alunos obtiveram nota acima desta média calculada.
    Escrever a média da turma e o resultado da contagem.*/
    function media_turma(){
        $notas=[];
        $media=0;
        $acima_media=0;
        for($i=0;$i<20;$i++){
            $notas[$i]=(int)readline();
            $media+=$notas[$i];
        }
        $media/=20;
        foreach($notas as $nts){
            if($media<$nts){
                $acima_media++;
            }
        }
        echo "Media da turma = $media\n"."Alunos acima da média = $acima_media";
    }

    /*9)Escreva um algoritmo que permita a leitura dos nomes de 10 pessoas e armazena os
    nomes lidos em um vetor. Após isto, o algoritmo deve permitir a leitura de mais 1 nome
    qualquer de pessoa e depois escrever a mensagem ACHEI, se o nome estiver entre os 10 nomes
    lidos anteriormente (guardados no vetor), ou NÃO ACHEI caso contrário.*/
    function procura_nome(){
        $nomes=[];
        for($i=0;$i<10;$i++){
            $nomes[$i]=(string)readline('Digite um nome: ');
        }
        $nome=readline('Digite o nome a ser procurado: ');
        foreach($nomes as $nm){
            if($nm==$nome){
                $mensagem="Achei";
                break;
            }else{
                $mensagem="Não achei";
            }
        }
        echo $mensagem;
    }

    /*10Cadastre 10 pessoas utilizando vetores associativos, sendo que você deverá utilizar um vetor para cadastrar cada pessoa. Obtenha seguintes dados do usuário: nome, cidade, idade, sexo. Ao final do cadastro e armazenamento seu programa deverá exibir: 
        a)Uma listagem de todos os nomes e idades das pessoas cadastradas; 
        b)Uma listagem de todos os nomes de quem mora em Guarapuava; 
        c)Uma listagem de todos os nomes de quem tem mais de 18 anos; 
        d)E quantas pessoas cadastradas são do sexo feminino.*/
    function pessoas(){
        $pessoa=[[]];
        $cont=0;
        for($i=0;$i<10;$i++){
            $pessoa[$i]['nome']=readline("Digite um nome: "); 
            $pessoa[$i]['cidade']=readline("Digite a cidade: ");
            $pessoa[$i]['idade']=readline("Digite a idade: ");
            $pessoa[$i]['sexo']=readline("Digite o sexo: ");
        }
        for($i=0;$i<10;$i++){
            echo $pessoa[$i]['nome'],"\n";
            echo $pessoa[$i]['idade']." anos\n";
        }
        for($i=0;$i<10;$i++){
            if($pessoa[$i]['cidade']=="Guarapuava"){
                echo $pessoa[$i]['nome'],"\n";
            }
        }
        for($i=0;$i<10;$i++){
            if($pessoa[$i]['idade']>18){
                echo $pessoa[$i]['nome'],"\n"; 
            }
        }
        for($i=0;$i<10;$i++){
            if($pessoa[$i]['sexo']=="feminino"){
                $cont++;
            }
        }
        echo $cont;
    }

    /*11)Faça um algoritmo para ler e armazenar em um vetor a temperatura média de 10 dias do ano. Calcular e escrever:
        a)Menor temperatura do ano
        b)Maior temperatura do ano
        c)Temperatura média anual
        d)O número de dias no ano em que a temperatura foi inferior à média anual*/
    function temperatura(){
        $temperatura=[];
        $menor=100;
        $maior=-100;
        $media=0;
        $count=0;
        for($i=0;$i<10;$i++){
            $temperatura[$i]=readline();
            $media+=$temperatura[$i];
        }
        $media/=10;
        foreach($temperatura as $temp){
            if($temp<$menor){
                $menor=$temp;
            }
            if($temp>$maior){
                $maior=$temp;
            }
            if($temp<$media){
                $count++;
            }
        }
        echo "Menor temperatura do ano = $menor °C\nMaior temperatura do ano = $maior °C\nTemperatura média anual = $media °C\nDias temperatura inferior a média = $count";
    }

    //12)Faça um algoritmo para ler 10 números e armazenar em um vetor. Após isto,
    //o algoritmo deve ordenar os números no vetor em ordem crescente. Escrever o vetor ordenado.
    //(OBS: Não utilizar métodos de ordenação do PHP)
    function bubble_sort(){
        $array=[];
        $troca=1;
        for($i=0;$i<10;$i++){
            $array[$i]=readline();
        }
        while($troca==1){
            $troca=0;
            for($i=0;$i<9;$i++){
                if($array[$i]>$array[$i+1]){
                    $troca=1;
                    $aux=$array[$i];
                    $array[$i]=$array[$i+1];
                    $array[$i+1]=$aux;
                }
            }
        }
        print_r($array);
    }

    switch($letra){
        case "1":
            multiplo_cinco();
            break;
        case "2":
            dez_numeros();
            break;
        case "3":
            maior_valor();
            break;
        case "4":
            soma_de_vetor();
            break;
        case "5":
            inverso();
            break;
        case "6":
            multiplicao_vetor();
            break;
        case "7":
            calendário();
            break;
        case "8":
            media_turma();
            break;
        case "9":
            procura_nome();
            break;
        case "10":
            pessoas();
            break;  
        case "11":
            temperatura();
            break;       
        case "12":
            bubble_sort();
            break;             
        default:
            echo "Opção inválida.";
            break;
    }
?>