<?php
    //Usuários
    function get_usuarios(){
        $json = file_get_contents("usuarios.json");
        return $json = json_decode($json, true);
    }
    function post_usuarios($new_user){
        $users=json_encode($new_user);
        file_put_contents("usuarios.json",$users,LOCK_EX);
    }
    function update_usuario($user){
        $users = get_usuarios();
        for($i=0;$i<count($users);$i++){
            if($user['id']==$users[$i]['id']){
                $users[$i]=$user;
                break;
            }
        }
        $users=json_encode($users);
        file_put_contents("usuarios.json",$users,LOCK_EX);
    }
    //Produtos
    function get_products(){
        $json = file_get_contents("produtos.json");
        return $json = json_decode($json, true);
    }
    function post_product($new_product){
        $product=json_encode($new_product);
        file_put_contents("produtos.json",$product,LOCK_EX);
    }
?>