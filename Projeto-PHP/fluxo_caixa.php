<?php
include "common.php";
    //Login
    function sing_in($user,$password){
        $users = get_usuarios();
        if($user&&$password){
            foreach($users as $us){
                if($user==$us['user']&&$password==$us['password']){
                    $_SESSION['id']=$us['id'];
                    echo "\nLogado com sucesso!!\n";
                    save_log("Usuário $user fez o login");
                    $_SESSION['caixa'] = readline("Digite o valor do dinheiro em caixa: ");
                    return true;
                }
            }
            echo "\nUsuario não encontrado ou Senha incorreta\n";
        }else{
            echo "\nUsuário e Senha devem ser preenchido\n";
        }
    }
    //Cadastro
    function sing_up($user,$password,$confirm_password){
        $users=get_usuarios();
        foreach($users as $us){
            if($user==$us['user']){
                echo "\nUsuario já existe\n";
                return false;
            }
        }
        if($password!==$confirm_password){
            echo "\nSenhas devem ser iguais\n";
            return false;
        }
        $new_user=[
            "id"=>count($users)+1,
            "user"=>$user,
            "password"=>$password,
        ];
        $users[]=$new_user;
        post_usuarios($users);
        save_log("Foi criado o usuário $user");
        echo "\nUsuário cadastrado com sucesso!!\n";
        return true;
    }
    //Deslogar
    function logout(){
        if(!isset( $_SESSION['id'])){
            echo "\nNenhum usuário logado\n";
            return false;
        }
        unset($_SESSION['id']);
        unset($_SESSION['caixa']);
        save_log("Usuário deslogou");
        echo "\nDeslogado com sucesso!!\n";
        return true;
    }
    //Cadastrar Produtos
    function add_product($item){
        $products=get_products();
        $new_item=[
            'id_procut'=>(count($products)+1)?:1,
            'name'=>$item['name'],
            'price'=>$item['price'],
            'stock'=>$item['stock'],
            'id_user'=>$_SESSION['id']
        ];
        $products[]=$new_item;
        post_product($products);
        save_log("Foi adicionado o produto ".$item['name']);
        echo "\nProduto Cadastrado com sucesso!!\n";
    }
    //Vender Produto
    function sale_product(){
        $total=0;
        $products=get_products();
        $bool=false;
        do{
            $id_product=readline("Digite o id do produto: ");
            for($i=0;$i<count($products);$i++){
                if($products[$i]['id_procut']==$id_product){
                    if($products[$i]['stock']>0){
                        $total+=$products[$i]['price'];
                        $products[$i]['stock']--;
                        $bool = true;
                        break;
                    }else{
                        echo "\nProduto em falta!!\n";
                    }
                }
            }
            if(!$bool){
                echo "\nID de produto não existe\n";
            }
            $continue=readline('Deseja adicionar mais produtos?(S/N)');
        }while(strtolower($continue) !== 'n');
        echo "Compra ficou no valor de R$ $total\n";
        $money=readline("Digite o valor dado pelo cliente: ");
        if($total<=$money){
            $troco=$money-$total;
            if($_SESSION['caixa']>=$troco){
                $_SESSION['caixa']+=$total;
                $_SESSION['caixa']-=$troco;
                post_product($products);
                save_log("Foi feita uma venda no valor de R$ $total");
                echo "\nVenda realizada com sucesso! Troco: R$ $troco\n";
            }else{
                echo "\nVenda Cancelada!! Dinheiro para troco insuficente";
            }
        }else{
            echo "\nDinheiro insuficente\n";
        }
    }
    //Atualizar Produto
    function update_product($item){
        $products=get_products();
        $bool=false;
        for ($i = 0; $i < count($products); $i++) {
            if ($products[$i]['id_procut'] == $item['id_procut']) {
                // Atualiza apenas os campos fornecidos
                $products[$i]['name'] = $item['name'] ?? $products[$i]['name'];
                $products[$i]['price'] = $item['price'] ?? $products[$i]['price'];
                $products[$i]['stock'] = $item['stock'] ?? $products[$i]['stock'];
                $bool = true;
                break;
            }
        }
        if ($bool) {
            post_product($products);
            save_log("O produto".$item['name']."foi atualizado");
            echo "Produto atualizado com sucesso!\n";
        } else {
            echo "Produto não encontrado!\n";
        }
    }
?>