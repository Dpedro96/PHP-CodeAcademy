<?php
    function login($user,$password){
        $json = file_get_contents("usuarios.json");
        $users = json_decode($json, true);
        if($user&&$password){
            foreach($users as $us){
                if($user===$us['user']){
                    if($password===$us['password']){
                        $us['password']=true;
                    }else{
                        echo "Senha incorreta";
                    }
                }else{
                    echo "Usuario não encontrado";
                }
            }
        }else{
            echo "Usuário e Senha devem ser preenchido";
        }
    }
    echo login($user,$password);
?>