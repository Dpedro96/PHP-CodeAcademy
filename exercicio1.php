

<?php
    $letra = readline("Escolha uma opção (a-l): ");
    
    //a)Dados dois números inteiros (dividendo e divisor), apresentar o quociente e o resto.
    function divisao($dividendo, $divisor){
        $quociente = intdiv($dividendo,$divisor);
        $resto = $dividendo % $divisor;
        echo "$dividendo / $divisor = $quociente \n";
        echo "O resto da divisão é " . $resto;
    }

    //b)A partir de quatro números que serão fornecidos, calcular a média ponderada, considerando os pesos 1, 2, 3 e 4 respectivamente.
    function media_ponderada($num1,$num2,$num3,$num4){
        $media=($num1*1+$num2*2+$num3*3+$num4*4)/10;
        echo "A media poderada = ".$media;
    }
    
    //c)Calcular o valor de um produto que sofreu reajuste de 1% (Aumento).
    function reajuste($prod){
        $valor=$prod+($prod*0.01);
        echo "O reajuste de 1% = ".$valor;
    }
    
  /*d)Sabendo-se que 100 quilowatts de energia custa um sétimo do salário mínimo,
    fazer um algoritmo que receba o valor do salário mínimo e a quantidade de quilowatts gasta por uma residência.
    Calcular: o valor em reais de cada quilowatt, o valor em reais a ser pago e o valor a ser pago com desconto de 10%.*/
    function copel($salario, $energia){
        $valor_watts=$salario/700;
        $conta_luz=$valor_watts*$energia;
        $desconto=$conta_luz-($conta_luz*0.1);
        echo "O valor em reais de cada watts = R$".number_format($valor_watts,2,",",".")."\n";
        echo "O valor da conta de luz = R$".number_format($conta_luz,2,",",".")."\n";
        echo "A luz com desconto de 10% = R$".number_format($desconto,2,",",".");
    }

    //e)Dadas a base e a altura de um retângulo, calcular o perímetro, a área e a diagonal.  
    function retangulo($base, $altura){
        $perimetro=$base*2+$altura*2;
        $area=$base*$altura;
        $diagonal=sqrt(pow($base,2)+pow($altura,2));
        echo "O perimetro do retângulo = ".$perimetro."\n";
        echo "A área do retângulo = ".$area."\n";
        echo "A diagonal do triângulo = ".number_format($diagonal,2)."\n";
    }

    //f)Calcular a área de um triângulo (dadas a base e a altura).
    function triangulo($base, $altura){
        $area=($base*$altura)/2;
        echo "A área do triângulo = ".number_format($area,2);
    }

    //g)Calcular a área de um losango (dadas as diagonais maior e menor).
    function losango($dmaior,$dmenor){
        $area = ($dmaior*$dmenor)/2;
        echo "A área do losango = ".number_format($area,2);
    }

  /*i)Uma revendedora de carros usados paga a seus vendedores um salário fixo mensal,
    além de uma comissão fixa por cada carro vendido e mais 5% do valor total das vendas realizadas pelo vendedor. 
    Escreva um algoritmo que receba como entrada o número de carros vendidos pelo vendedor, o valor total das vendas, 
    o salário fixo mensal e o valor da comissão por carro vendido. O algoritmo deve calcular e exibir o salário final do vendedor, 
    que é a soma do salário fixo, da comissão por carro vendido, e 5% do valor total das vendas.*/
    function salario($num_carros,$total_vendas,$salario_fixo,$comissao_por_carro){
        $comissao_carro=$num_carros*$comissao_por_carro;
        $comissao_vendas=$total_vendas*0.05;
        $salario_total=$salario_fixo+$comissao_carro+$comissao_vendas;
        echo "O salário do vendedor é = R$".number_format($salario_total,2,",",".");
    }

    //—---------------- DESAFIOS OPCIONAIS —---------------
    //j)Dada a hora, calcular quantos minutos se passaram desde o início do dia.
    function minutos($hora){
        $minutos=(int)$hora*60;
        $minutos+=($hora-(int)$hora)*100;
        echo $minutos;
    }

    //k)Dado um número de três dígitos no formato CDU, mostre como resultado a sua inversão (formato UDC) (por exemplo, para 123, o resultado será 321).
    function inverte($num){
        $num=strrev($num);
        echo $num;
    }

  /*l)Dado um número de conta corrente com três dígitos, calcular seu dígito verificador, da seguinte forma:
    1)Somar o número da conta pelo seu inverso (igual ao exercício k);
    2)Multiplicar cada dígito da soma pela sua ordem posicional e somar estes resultados (primeiro * 1, segundo * 2, terceiro * 3, etc );
    3)O último dígito desse resultado é o dígito verificador da conta.*/
    function verificador($num){
        $num+=strrev($num);
        $num=str_split($num);
        $valor=[];
        for($i=0;$i<3;$i++){
           $valor[$i]=(int)$num[$i]*($i+1);
        }
        print_r($valor);
        echo "O dígito verificador = ".end($valor);
    }


    switch($letra){
        case "a":
            $dividendo = (int) readline();
            $divisor = (int) readline();
            divisao($dividendo, $divisor);
            break;
        case "b":
            $num1 = (int) readline();
            $num2 = (int) readline();
            $num3 = (int) readline();
            $num4 = (int) readline();
            media_ponderada($num1, $num2, $num3, $num4);
            break;
        case "c":
            $prod = (float) readline();
            reajuste($prod);
            break;
        case "d":
            $salario = (float) readline();
            $energia = (float) readline();
            copel($salario, $energia);
            break;
        case "e":
            $base = (float) readline();
            $altura = (float) readline();
            retangulo($base, $altura);
            break;
        case "f":
            $base = (float) readline();
            $altura = (float) readline();
            triangulo($base, $altura);
            break;
        case "g":
            $dmaior = (float) readline();
            $dmenor = (float) readline();
            losango($dmaior, $dmenor);
            break;
        case "i":
            $num_carros = (int) readline();
            $total_vendas = (float) readline();
            $salario_fixo = (float) readline();
            $comissao_por_carro = (float) readline();
            salario($num_carros, $total_vendas, $salario_fixo, $comissao_por_carro);
            break;
        case "j":
            $hora = (float) readline();
            minutos($hora);
            break;
        case "k":
            $num = (int) readline();
            inverte($num);
            break;
        case "l":
            $num = (int) readline();
            verificador($num);
            break;
        default:
            echo "Opção inválida.";
            break;
    }
?>