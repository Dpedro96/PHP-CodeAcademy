<?php
include "common.php";
    //Login
    function sing_in($user,$password){
        $users = get_usuarios();
        if($user&&$password){
            foreach($users as $us){
                if($user==$us['user']&&$password==$us['password']){
                    $_SESSION['id']=$us['id'];
                    echo "Logado com sucesso!!\n";
                    $_SESSION['caixa'] = readline();
                    return true;
                }
            }
            echo "Usuario não encontrado ou Senha incorreta\n";
        }else{
            echo "Usuário e Senha devem ser preenchido\n";
        }
    }
    //Cadastro
    function sing_up($user,$password,$confirm_password){
        $users=get_usuarios();
        foreach($users as $us){
            if($user==$us['user']){
                echo "Usuario já existe\n";
                return false;
            }
        }
        if($password!==$confirm_password){
            echo "Senhas devem ser iguais\n";
            return false;
        }
        $new_user=[
            "id"=>count($users)+1,
            "user"=>$user,
            "password"=>$password,
        ];
        $users[]=$new_user;
        post_usuarios($users);
        echo "Usuário cadastrado com sucesso\n";
        return true;
    }
    //Deslogar
    function logout(){
        if(!isset( $_SESSION['id'])){
            echo "Nenhum usuário logado\n";
            return false;
        }
        unset($_SESSION['id']);
        unset($_SESSION['caixa']);
        echo "Deslogado com sucesso!!\n";
        return true;
    }
    //Cadastrar Produtos
    function add_product($item){
        $products=get_products();
        $new_item=[
            'id_procut'=>count($products) + 1,
            'name'=>$item['name'],
            'price'=>$item['price'],
            'stock'=>$item['stock'],
            'id_user'=>$_SESSION['id']
        ];
        $products[]=$new_item;
        post_product($products);
        echo "Produto Cadastrado com sucesso!!";
    }
    //Vender Produto
    function sale_product(){
        $total=0;
        $products=get_products();
        $bool=false;
        do{
            $id_product=readline("Digite o id do produto\n");
            for($i=0;$i<count($products);$i++){
                if($products[$i]['id_procut']==$id_product){
                    if($products[$i]['stock']>0){
                        $total+=$products[$i]['price'];
                        $products[$i]['stock']--;
                        $bool = true;
                        break;
                    }else{
                        echo "Produto em falta!!\n";
                    }
                }
            }
            if(!$bool){
                echo "ID de produto não existe\n";
            }
            $continue=readline('Deseja adicionar mais produtos?(S/N)\n');
        }while($continue!='n'||$continue!='N');
        $money=readline();
        if($total<=$money){
            $troco=$money-$total;
            if($_SESSION['caixa']>$troco){
                $_SESSION['caixa']+=$total;
                post_product($products);
                echo "Venda realizada com sucesso";
            }else{
                echo "Venda Cancelada!! Dinheiro para troco insuficente";
            }
        }else{
            echo "Dinheiro para troco insuficente";
        }
    }
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
            echo "Produto atualizado com sucesso!\n";
        } else {
            echo "Produto não encontrado!\n";
        }
    }
?>