<?php
    //Usuários
    function get_usuarios(){
        if (!file_exists("usuarios.json")) {
            return [];
        }
        $json = file_get_contents("usuarios.json");
        $users = json_decode($json, true);
        return $users ?: [];
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
        if (!file_exists("produtos.json")) {
            return [];
        }
        $json = file_get_contents("produtos.json");
        $products = json_decode($json, true);
        return $products ?: [];
    }
    function post_product($new_product){
        $product=json_encode($new_product);
        file_put_contents("produtos.json",$product,LOCK_EX);
    }
    function save_log($message){
        $date_hour=date('d/m/Y H:i:s');
        $log="[$date_hour] $message\n";
        file_put_contents("log.txt",$log,FILE_APPEND|LOCK_EX);
    }
?>