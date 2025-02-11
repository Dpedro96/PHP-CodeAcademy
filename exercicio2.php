<?php
    $letra = readline("Escolha uma opção (1-15): ");
    
    //1)Faça um algoritmo que leia um valor e escreva a mensagem “É maior que 10!” 
    //se o valor lido for maior que 10, caso contrário escrever “Não é maior que 10!”.
    function maior10($num){
        if($num>10){
            echo "É maior que 10";
        }else{
            echo "Não é maior que 10";
        }
    }

    //2)Ler um valor e escrever se é positivo ou negativo (considere o valor zero como positivo).
    function sinal($num){
        if($num<0){
            echo "Valor é negativo";
        }else{
            echo "Valor é positivo";
        }
    }

    //3)As maçãs custam R$1,30 cada se forem compradas menos de uma dúzia, e 
    //R$1,00 se forem compradas pelo menos 12. Escreva um programa que leia 
    //o número de maçãs compradas, calcule e escreva o custo total da compra.
    function maca($num){
        if($num<12){
            echo "O Total deu R$".number_format($num*1.3,2,",",".");
        }else{
            echo "O Total deu R$".number_format($num*1,2,",",".");
        }
    }

    /*4)Ler as notas da 1a. e 2a. avaliações de um aluno. 
    Calcular a média aritmética simples e escrever uma mensagem que diga se o 
    aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o aluno é aprovado).
    Escrever também a média calculada.*/
    function notas($nota1,$nota2){
        $media=($nota1+$nota2)/2;
        if($media>=6){
            echo  "O aluno foi Aprovado com a media ".number_format($media,2);
        }
        else{
            echo  "O aluno foi Reprovado com a media ".number_format($media,2);
        }
    }

    //5)Faça um algoritmo que leia o ano de nascimento de uma pessoa, calcule e mostre sua idade, 
    //e também informe se ela já pode votar (16 anos ou mais) e tirar a Carteira de Habilitação (18 anos ou mais).
    function idade($num){
        $idade=date('Y')-$num;
        if($idade>0&&$idade<130){
            if($idade>16){
                echo "Você tem ".$idade." anos. E já pode votar";
                if($idade>18){
                    echo " e também pode tirar a Carteira de Habilitação";
                }
            }else{
                echo "Você tem ".$idade."anos";
            }
        }
        else{
            echo "Valor inválido ou você bateu o record de pessoa mais velha do mundo";
        }
    }

    //6)Ler dois valores (considere que não serão lidos valores iguais) e escrever o maior deles.
    function maior($num, $num1){
        if($num>$num1){
            echo $num." é maior";
        }else{
            echo $num1." é maior";
        }
    }

    //7)Elabore um algoritmo que, dada a idade de um nadador, classifique-o em uma das categorias:
        /*Idade           Categoria
        5 até 7 anos    Infantil A
        8 até 10 anos   Infantil B
        11 até 13 anos  Juvenil A
        14 até 17 anos  Juvenil B
        Maiores de 18 anos  Sênior*/  
    function faixa_etaria($idade){
        $categoria=match(true){
            $idade>=18=>"Senior",
            $idade>=14=>"Juvenil B",
            $idade>=11=>"Juvenil A",
            $idade>=8=>"Infantil B",
            $idade>=5=>"Infantil A",
            $idade<5=>"Inválida"
        };
        echo "Categoria ".$categoria; 
    }

    /*8)Desenvolva um algoritmo que calcule o valor a ser pago por um produto, 
    considerando o preço de etiqueta e a condição de pagamento. Utilize os códigos do 
    quadro abaixo para ler a condição de pagamento e efetuar o cálculo adequado.
    Código          Condição de pagamento
    1                 À vista em dinheiro com 10% de desconto.
    2                 À vista no cartão com 5% de desconto.
    3                 Em 2 vezes, preço normal da etiqueta.
    4                 Em 3 vezes, preço normal da etiqueta com juros de 10%.*/
    function preco($valor,$tipo_pagamento){
        switch($tipo_pagamento){
            case 1:
                echo "R$ ".number_format($valor-($valor*0.1),2,",",".");
            break;
            case 2:
                echo "R$ ".number_format($valor-($valor*0.05),2,",",".");
            break;
            case 3:
                echo "R$ ".number_format($valor,2,",",".");
            break;
            case 4:
                echo "R$ ".number_format($valor+($valor*0.1),2,",",".");
            break;
            default:
                echo "Valor Inválido";
        }
    }

    //9)Desenvolva um algoritmo que, dado um número, verifique se ele está entre 
    //30 e 90 ou é maior que 120 ou não se encaixa em nenhuma dessas condições.
    function numero_entre($num){
        $saida = match(true){
            $num>30&&$num<90=>"Está entre 30 e 90",
            $num>120=>"É maior que 120",
            $num<120=>"Não se encaixa em nenhuma das opções"
        };
        echo $saida;
    }

    //10)Um comerciante usa margem de lucro de 45% se o valor de compra do produto for menor que 
    //R$20,00 e 30% nos demais casos. Dado o valor do produto, calcule o preço de venda.
    function margem_lucro($preco_produto){
        if($preco_produto<20){
            $preco_venda=$preco_produto+($preco_produto*0.3);
        }else{
            $preco_venda=$preco_produto+($preco_produto*0.45);
        }
        echo "O valor de venda do produto é $preco_venda";
    }

    // —------------------- OPCIONAIS —-------------------
    //11)Identifique, entre três jogadores, os ganhadores do “dois-ou-um”. O “dois-ou-um” 
    //é disputado na primeira rodada. O vencedor é quem, na segunda rodada, vence o “par-ou-ímpar”.
    function dois_ou_um(){
        $jogadores=[];
        $condicao=true;
        function par_ou_impar(){
            $j1=(int)readline("Digite um número: ");
            $j2=(int)readline("Digite um número: ");
            if(($j1+$j2)%2===0){
                return true;
            }else{
                return false;
            }      
        }
        while($condicao===true){
            $jogadores[0]=(int)readline('Jogador1-Dois ou Um: ');
            $jogadores[1]=(int)readline('Jogador2-Dois ou Um: ');
            $jogadores[2]=(int)readline('Jogador3-Dois ou Um: ');
            if($jogadores[0]==$jogadores[1]&&$jogadores[1]!==$jogadores[2]){
                echo "Jogador1 é par e Jogador 2 é impar\n";
                echo par_ou_impar() ? "Vencedor: Jogador 1" : "Vencedor: Jogador 2";
                $condicao=false;
            }elseif($jogadores[0]!==$jogadores[1]&&$jogadores[1]==$jogadores[2]){
                echo "Jogador 2 é par e Jogador 3 é impar\n";
                echo par_ou_impar() ? "Vencedor: Jogador 2" : "Vencedor: Jogador 3";
                $condicao=false;
            }elseif($jogadores[0]!==$jogadores[1]&&$jogadores[0]==$jogadores[2]){
                echo "Jogador 1 é par e Jogador 3 é impar\n";
                echo par_ou_impar() ? "Vencedor: Jogador 1" : "Vencedor: Jogador 3";
                $condicao=false;
            }else{
                echo "Tente novamente\n";
            }
        }
    }

    //12)Dados quatro valores numéricos, identificar qual deles é o menor valor par.
    function menor_valor(){
        $menor=null;
        for($i=0;$i<4;$i++){
            $num=(int)readline();
            if($num%2==0&&($num<$menor||$menor==null)){
                $menor=$num;
            }
        }
        echo $menor?"Esse é o menor valor par = $menor":"Nenhum valor foi válido";
    }

    //13)Ler a hora de início e a hora de fim de um jogo de Xadrez (considere apenas horas inteiras, sem os minutos)
    //e calcule a duração do jogo em horas, sabendo-se que o tempo máximo de duração do jogo é de 24 horas e que o 
    //jogo pode iniciar em um dia e terminar no dia seguinte.
    function horas_xadrez(){
        $inicio=readline();
        $fim=readline();
        $total=0;
        if($inicio>0&&$inicio<24&&$fim>0&&$fim<24){
            if($inicio<$fim){
                $total=$fim-$inicio;
            }elseif($inicio>$fim){
                $total=24-($inicio-$fim);
            }else{
                $total=24;
            }
            echo "A duração da partida foi de $total horas";
        }else{
            echo "Valor Inávalido";
        }
    }

    /*14)A jornada de trabalho semanal de um funcionário é de 40 horas. 
    O funcionário que trabalhar mais de 40 horas receberá hora extra, cujo cálculo é o 
    valor da hora regular com um acréscimo de 50%. Escreva um algoritmo que leia o número de horas
    trabalhadas em um mês, o salário por hora e escreva o salário total do funcionário, que deverá ser 
    acrescido das horas extras, caso tenham sido trabalhadas (considere que o mês possua 4 semanas exatas).
    Além disso, se o funcionário  trabalhar menos do que 40 horas por semana, ele deverá receber um desconto de 5%.*/
    function salario(){
        $horas=(int)readline();
        $salario_hora=(int)readline();
        if($horas>=40){
            $extra=$horas-40;
            $salario=$salario_hora*($horas-$extra)+$extra*($salario_hora+($salario_hora*0.5));
        }else{
            $salario=$salario_hora*$horas;
            $salario=$salario-$salario*0.05;
        }
        echo "R$".number_format($salario,2,",",".");
    }

    /*15)Ler o salário fixo e o valor das vendas efetuadas pelo vendedor de uma empresa. 
    Sabendo-se que ele recebe uma comissão de 3% sobre o total das vendas até R$1.500,00
    mais 5% sobre o que ultrapassar este valor, calcular e escrever o seu salário total.*/
    function salario_comissao(){
        $salario_fixo=readline();
        $vendas=readline();
        if($vendas>=1500){
            $extra=$vendas-1500;
            $salario_total=$salario_fixo+(($vendas-$extra)*0.03+$extra*0.05);
        }else{
            $salario_total=$salario_fixo+$vendas*0.03;
        }
        echo "Salário Total R$".number_format($salario_total,2,",",".");
    }
    
    switch($letra){
        case "1":
            $num=readline();
            maior10($num);
            break;
        case "2":
            $num=readline();
            sinal($num);
            break;
        case "3":
            $num=readline();
            maca($num);
            break;
        case "4":
            $num=readline();
            $num1=readline();
            notas($num,$num1);
            break;
        case "5":
            $num=readline();
            idade($num);
            break;
        case "6":
            $num=readline();
            $num1=readline();
            maior($num,$num1);
            break;
        case "7":
            $num=readline();
            faixa_etaria($num);
            break;
        case "8":
            $num=readline();
            $num1=readline();
            preco($num,$num1);
            break;
        case "9":
            $num=readline();
            numero_entre($num);
            break;
        case "10":
            $num=readline();
            margem_lucro($num);
            break;
        case "11":
            dois_ou_um();
            break;
        case "12":
            menor_valor();
            break;
        case "13":
            horas_xadrez();
            break;
        case "14":
            salario();
            break;
        case "15":
            salario_comissao();
            break;            
        default:
            echo "Opção inválida.";
            break;
    }
?>