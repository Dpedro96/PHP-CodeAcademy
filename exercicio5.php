<?php
    $letra = readline("Escolha uma opção (1-4): ");

    /*1)Escreva um programa com quatro funções diferentes, cada uma recebe dois números inteiros e 
    realiza uma operação matemática diferente (soma, subtração, multiplicação e divisão)e retorna o
    resultado. A escolha da função a ser executada é decidida por uma variável inteira que é preenchida
    no início do programa juntamente com as outras duas variáveis com os valores do cálculo.O resultado
    deve ser apresentado no final da execução. Quando a função de divisão é utilizada, ela deve 
    retornar uma mensagem de erro se ocorrer divisão por zero.*/
    function um(){
        function soma($num,$num1){
            $soma=$num+$num1;
            echo "Resultado da Soma = $soma";
        }
        function subtracao($num,$num1){
            $sub=$num-$num1;
            echo "Resultado da Subtração = $sub";
        }
        function divisao($num,$num1){
            if($num1==0){
                echo "Erro: Não é possível fazer divisão por 0";
            }else{
                $div=$num/$num1;
                echo "Resultado da Divisão = $div";
            }
        }
        function multi($num,$num1){
            $mult=$num*$num1;
            echo "Resultado da Multiplicação = $mult";
        }
        $entrada=readline();
        $num=readline();
        $num1=readline();
        switch($entrada){
            case 1:
                soma($num,$num1);
                break;
            case 2:
                subtracao($num,$num1);
                break;
            case 3:
                multi($num,$num1);
                break;
            case 4:
                divisao($num,$num1);
                break;
            default:
                echo "Entrada Inválida";
        }
    }

    /*2)Escreva uma função para cada questão a seguir:
        a)Leia um número inteiro e retorne true se o número é múltiplo de 4 e false se o número não é múltiplo de 4.
        b)Leia um número inteiro e retorne true se o número é par e false se o número é ímpar.
        c)Leia 2 números inteiros positivos e apresente a soma dos n números existentes entre eles. 
        Exemplo: 1 e 4 deve apresentar a soma de 2 e 3.
        d)Leia três números inteiros: a, b e c, onde a>1; e apresente a soma de todos os números 
        inteiros de b até c que sejam divisíveis por a. Exemplo: Para os valores de entrada 2 (para a),
        5 (para b) e 10 (para c), a soma será 6+8+10= 24.
        e)Leia a altura e o sexo de uma pessoa e apresente o seu peso ideal. Para homens, calcular e 
        apresentar o peso ideal usando a fórmula peso ideal = 72.7 * altura - 58 e, para mulheres, 
        peso ideal = 62.1 * altura - 44.7.*/
    function dois(){
        function multiplo_quatro($num){
            if($num%4==0){
                return true;
            }else{
                return false;
            }
        }
        function multiplo_dois($num){
            if($num%2==0){
                return true;
            }else{
                return false;
            }
        }
        function soma_entre($num,$num1){
            if($num>$num1){
                $soma=$num;
                $num=$num1;
                $num1=$soma;
            }
            $soma=0;
            for($i=$num+1;$i<$num1;$i++){
                $soma+=$i;
            }
            echo "$soma";
        }
        function tres_numeros($num,$num1,$num2){
            if($num>1){
                for($i=$num1;$i<=$num2;$i++){
                    if($i%$num==0){
                        echo "$i ";
                    }
                }
            }
        }
        function imc($altura,$sexo){
            if($sexo=="M"||$sexo=="m"){
                $peso_ideal=62.1*$altura-44.7;
            }elseif($sexo=="H"||$sexo=="h"){
                $peso_ideal=72.7*$altura-58;
            }else{
                echo "Entrada Inválida";
            }
            echo "Seu peso ideal é ".number_format($peso_ideal,2);
        }
        $entrada=readline();
        $num=readline();
        switch($entrada){
            case 1:
                multiplo_quatro($num);
                break;
            case 2:
                multiplo_dois($num);
                break;
            case 3:
                $num=readline();
                $num1=readline();
                soma_entre($num,$num1);
                break;
            case 4:
                $num1=readline();
                $num2=readline();
                tres_numeros($num,$num1,$num2);
                break;
            case 5:
                echo "Digite H para homem e Digite M para mulher: ";
                $sexo=readline();
                imc($num,$sexo);
                break;
            default:
                echo "Entrada Inválida";
        }
    }

    //—------------------------- OPCIONAIS —------------------------
    //3)Escreva um programa que tenha uma função que receba um array de inteiros e encontre o maior 
    //número armazenado na array.

    function tres(){
        function maior($array){
            $maior=0;
            foreach($array as $a){
                if($a>$maior){
                    $maior=$a;
                }
            }
            return $maior;
        }
        $array=[];
        $num_elementos=readline('Insira o tamanho do vetor: ');
        for($i=0;$i<$num_elementos;$i++){
            $array[$i]=readline();
        }
        echo "Maior Valor = ".maior($array); 
    }

    //4)Escreva um programa de conversão de temperaturas. O usuário deverá digitar uma temperatura,
    //sua unidade atual (C, F ou Kelvin) e a unidade nova desejada. O programa deverá então fazer a conversão.
    //Crie três funções de conversões, uma para cada unidade de temperatura.
    quatro();
    function quatro(){
        function celsius($temp,$unidade){
            if($unidade=="F"){
                $temp=$temp*1.8+32;
            }else{
                $temp=$temp+273.15;
            }
            echo "$temp º$unidade";
        }
        function fahrenheit($temp,$unidade){
            if($unidade=="C"){
                $temp=($temp-32)*1.8;
            }else{
                $temp=($temp-32)*1.8+273.15;
            }
            echo "$temp º$unidade";
        }
        function kelvin($temp,$unidade){
            if($unidade=="C"){
                $temp=$temp-273.15;
            }else{
                $temp=($temp-273.15)*1.8+32;
            }
            echo "$temp º$unidade";
        }
        $temp=readline('Digite a Temperatura: ');
        $unidade_atual=readline('Digite a unidade atual: ');
        $unidade_conversao=readline('Digite a unidade que quer converter: ');
        switch($unidade_atual){
            case 'C':
                celsius($temp,$unidade_conversao);
                break;
            case 'F':
                fahrenheit($temp,$unidade_conversao);
                break;
            case 'K':
                kelvin($temp,$unidade_conversao);
                break;
            default:
                break;
        }
    }

    switch($letra){
        case "1":
            um();
            break;
        case "2":
            dois();
            break;
        case "3":
            tres();
            break;
        case "4":
            quatro();
            break;     
        default:
            echo "Opção inválida.";
            break;
    }
?>